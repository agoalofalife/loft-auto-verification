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

    }
}