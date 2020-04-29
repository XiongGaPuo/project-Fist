<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //测试Admin分组下的Index方法
    public function index(){
        echo '这是Admin模块下的index方法';
    }
}
