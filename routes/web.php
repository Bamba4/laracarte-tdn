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

Route::get('/', 'PageController@home')->name('root_path');

Route::get('/about' , 'PageController@about')->name('about_path');

Route::get('/contact' , 'MessageController@create')->name('contact_path');
