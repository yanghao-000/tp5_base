<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        return 'Hello,World！';
    }
    public function hello($name = 'thinkphp')
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
    public function database()
    {
        $result = Db::query('select * from think_data where id = 5');
        dump($result);
    }
}