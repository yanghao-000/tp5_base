<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    // 'test/[:name]' => 'test/test/test',

    'blog/:year/:month' => ['test/blog/archive', ['method' => 'get'], ['year' => '\d{4}', 'month' => '\d{2}']],
    'blog/:id'          => ['test/blog/get', ['method' => 'get'], ['id' => '\d+']],
    'blog/:name'        => ['test/blog/read', ['method' => 'get'], ['name' => '\w+']],
];
