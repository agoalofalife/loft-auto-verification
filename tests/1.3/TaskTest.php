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
        $out1 = ob_get_contents();
        ob_end_clean();

        // извлечь константу
        $array = array_values( get_defined_constants());
        $last  = count($array) - 1;
         print_r( array_search($array[$last], get_defined_constants()));

    }
}