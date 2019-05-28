<?php

/*
|--------------------------------------------------------------------------
| Web 
|--------------------------------------------------------------------------
|
| Here is where you can  registerweb  for your application. These
|  are loaded by the erviceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'RestController@index')->name('index');
