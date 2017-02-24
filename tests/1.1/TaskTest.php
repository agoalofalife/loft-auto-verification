<?php
use PHPUnit\Framework\TestCase;


class TaskTest extends TestCase
{
    protected $fileName;
    protected $dir;

    public  function setUp()
    {
        $this->fileName = $_SERVER['argv'][2];
        $this->dir      = $_SERVER['PWD'];
    }

    public function testOneIsOne()
    {
        ob_start();

        require_once $this->dir . '/' . $this->fileName;
        $this->assertTrue(isset($name), 'Переменная $name не существует');
        $this->assertTrue(isset($age), 'Переменная $age не существует');

        $out1 = ob_get_contents();

        ob_end_clean();

        $this->assertTrue((bool) preg_match("/Меня   зовут:.+[А-яA-z]+/", trim($out1) ),  'Меня   зовут:   ___ ЗАДАНИЕ НЕ ВЫПОЛНЕНО');
        $this->assertTrue((bool) preg_match("/Мне [0-9]{2} лет/", trim($out1) ),  'Мне __ лет ЗАДАНИЕ НЕ ВЫПОЛНЕНО');
        $this->assertTrue((bool) preg_match('/\"\!\|\\\\\/\'\"\\\/', trim($out1) ),  '"!|\/\'"\   ЗАДАНИЕ НЕ ВЫПОЛНЕНО');


    }
}