<?php
namespace app\index\controller;

use app\index\model\User as UserModel;

class User
{
    // 新增用户数据
    public function add()
    {
        $user           = new UserModel;
        $user->nickname = '流年';
        $user->email    = 'thinkphp@qq.com';
        $user->birthday = '1977-03-05';
        if ($user->save()) {
            return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }
    // 新增用户数据
    public function add2()
    {
        $user['nickname'] = '看云2';
        $user['email']    = 'kancloud@qq.com';
        $user['birthday'] = strtotime('2015-04-02');
        if ($result = UserModel::create($user)) {
            return '用户[ ' . $result->nickname . ':' . $result->id . ' ]新增成功';
        } else {
            return '新增出错';
        }
    }
    // 批量新增用户数据
    public function addList()
    {
        $user = new UserModel;
        $list = [
            ['nickname' => '张三', 'email' => 'zhanghsan@qq.com', 'birthday' => strtotime('1988-01-15')],
            ['nickname' => '李四', 'email' => 'lisi@qq.com', 'birthday' => strtotime('1990-09-19')],
        ];
        if ($user->saveAll($list)) {
            return '用户批量新增成功';
        } else {
            return $user->getError();
        }
    }
    // 读取用户数据
    public function read($id='')
    {
        $user = UserModel::get($id);
        echo $user->nickname . '<br/>';
        echo $user->email . '<br/>';
        echo $user->status . '<br/>';
        echo $user->birthday . '<br/>';
    }
    // 获取用户数据列表
    public function index()
    {
        $list = UserModel::all();
        foreach ($list as $user) {
            echo $user->nickname . '<br/>';
            echo $user->email . '<br/>';
            echo date('Y/m/d', $user->birthday) . '<br/>';
            echo '----------------------------------<br/>';
        }
    }
}