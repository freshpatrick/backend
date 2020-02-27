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
    return view('/layout/welcome');
});


// 最新消息
Route::get('/news', function () {
    return view('/front/news');
});


Route::get('/index', function () {
    return view('/front/index');
});



Route::get('/nav', function () {
    return view('/layout/nav');
});

