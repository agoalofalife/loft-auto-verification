<?php
namespace agoalofalife\loft\console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class HomeworkCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('check')

            ->setDescription('Проверка домашнего задания')

            // configure an argument
            ->addArgument('numberTask', InputArgument::REQUIRED, 'Номер домашнего задания')
            ->addArgument('fileName', InputArgument::REQUIRED, 'Название файла')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $numberTask = $input->getArgument('numberTask');
        $fileName   = $input->getArgument('fileName');

        system("phpunit packages/agoalofalife/loft-auto-verification/tests/{$numberTask}/TaskTest.php {$fileName}");

    }
}