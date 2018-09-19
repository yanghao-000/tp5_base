<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
    // 设置完整的数据表（包含前缀）
    protected $table = 'think_user';
    // // birthday读取器
    // protected function getBirthdayAttr($birthday)
    // {
    //     return date('Y-m-d', $birthday);
    // }
    // // birthday修改器
    // protected function setBirthdayAttr($value)
    // {
    //     return strtotime($value);
    // }
    protected $type = [
        // 设置birthday为时间戳类型（整型）
        'birthday' => 'timestamp:Y/m/d',
    ];
    // 定义自动完成的属性
    protected $insert = ['status'];
    // status属性修改器
    protected function setStatusAttr($value, $data)
    {
        return '流年' == $data['nickname'] ? 1 : 2;
    }
    
    // status属性读取器
    protected function getStatusAttr($value)
    {
        $status = [-1 => '删除', 0 => '禁用', 1 => '正常', 2 => '待审核'];
        return $status[$value];
    }
}