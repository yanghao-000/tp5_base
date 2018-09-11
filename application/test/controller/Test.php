<?php
namespace app\test\controller;

use think\Controller;
use think\Db;
use think\Url;
use think\Request;

class Test extends Controller
{
    public function index(Request $request, $name = 'Request')
    {
        // 获取当前URL地址 不含域名
        echo 'url: ' . $request->url() . '<br/>';
        $data = ['name' => 'thinkphp', 'status' => '1'];
        // echo 'response: ' . $data;
        return $data;
    }
    public function test($name = 'test')
    {
        $url = Url::build('blog/get', 'id=5');
        $this->assign('name', $name);
        $this->assign('url', $url);
        return $this->fetch();
    }
    public function sql_demo($name = 'test')
    {
        $data = Db::name('data')->find();
        $this->assign('result', $data);
        return $this->fetch();
    }
}