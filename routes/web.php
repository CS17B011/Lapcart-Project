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

Route::get('/','FrontController@home');

Route::get('/product/{id}','FrontController@product');

Route::get('/contactus','FrontController@contact');

Route::resource('cart','CartController');

Route::get('/categories','FrontController@categories');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();