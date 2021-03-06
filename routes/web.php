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

Auth::routes();

Route::get('/', 'MainController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/film/{id}', 'MainController@film')->name('film');
Route::post('/send_comment', 'MainController@sendComment')->name('send_comment');

//Admin Panel
Route::get('/panel', 'AdminController@panel')->name('adminPanel');
Route::resource('/panel/films', 'FilmController');
Route::resource('/panel/genres', 'GenreController');
