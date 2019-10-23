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
//練習 1：設定 Route 反應
//    Route::get('/', function () {

          //return view('welcome');
          //return'welcome';
          //return view('welcome');
//          return redirect('welcome');
//    });


//練習 2：設定 Route 接收參數
    Route::get('hello/{name}',function($name){
        return'Hello,'.$name;
    });

    Route::get('hello/{name?}',function($name='Everybody'){
        return'Hello,'.$name;
    });

//練習 4：為 Route 命名
    Route::get('hello/{name?}',['as'=>'hello.index',function($name='Everybody'){
        return'Hello,'.$name;
    }]);

    Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
        return view('welcome');
    }]);

//練習 5：設定 Route 前置
    Route::get('dashboard',function(){
        return'dashboard';
    });

    Route::group(['prefix'=>'admin'],function(){
        Route::get('dashboard',function(){
            return'admindashboard';
        });
    });
//練習 7：將 Route 的內容搬至 Controller 內
    Route::get('/',['as'=>'home.index','uses'=>'HomeController@index']);



