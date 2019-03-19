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

Route::get('/', 'PageController@inicio');

Route::get('fotos', 'PageController@fotos')->name('foto');

Route::get('blog', 'PageController@blog')->name('noticias');

Route::get('nosotros/{member?}', 'PageController@nosotros')->name('nosotros');