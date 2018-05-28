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

Route::domain('www.zbtorch.com')->group(function () {
    Route::middleware('CountSpider')->get('/','HomeController@index');
});

Route::domain('zhannei.zbtorch.cn')->group(function () {
    Route::middleware('CountSpider')->get('/search','HomeController@search');
});

Route::domain('{account}.zbtorch.cn')->group(function ($account) {
    Route::middleware('CountSpider')->get('/','HomeController@fan');
});
