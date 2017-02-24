<?php


use PHPUnit\Framework\TestCase;

class Environment extends TestCase
{
    protected $fileName;
    protected $dir;

    public  function setUp()
    {
        $this->fileName = $_SERVER['argv'][2];
        $this->dir      = $_SERVER['OLDPWD'];
    }
}