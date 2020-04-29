<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //测试控制器路由的使用
    public function test1(){
        //输出任意信息
        phpinfo();
    }
}
