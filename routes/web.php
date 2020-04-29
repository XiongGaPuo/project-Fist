<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get','post'],'/test1',function (){
    echo '当前访问text1地址';
});
Route::get('/user/{id?}',function($id=1){
    return "您是用户{$id}";
});
Route::get('/user1',function(){
    return redirect()->route('XiongGaPuo');
});
Route::get('/user/fwfew/fewf/wf/w/we/fw/fw',function(){
    return "注册了一个很长的路由";
})->name('XiongGaPuo');

Route::group(['prefix'=>'/admin'],function(){
    Route::get('/text1',function(){
        echo '这是admin的text1路由';
    });
    Route::get('/text2',function(){
        echo '这是admin的text2路由';
    });
});

//控制器的路由写法
Route::get('/home/test/test1','TestController@test1');

Route::get('/home','Home\IndexController@index');
Route::get('/admin','Admin\IndexController@index');