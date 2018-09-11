<?php
namespace app\index\controller;

class HelloWorld
{
    public function index($name = 'index')
    {
        return 'Hello,' . $name . '！';
    }
    public function index2($name = 'index2')
    {
        return 'Hello,' . $name . '！';
    }
}