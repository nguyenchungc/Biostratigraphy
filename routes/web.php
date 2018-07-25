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

route::get('home',"HomeController@getHome");

route::get('register',"homeController@getRegister")->name('register');

Route::get('mainpage', "homeController@getmainpage");

route::get('inputdata',"homeController@inputdata");

Route::get('trang-chu',"homeController@welcomePage");
