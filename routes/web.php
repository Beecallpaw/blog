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

Route::get('/', 'PagesController@getHome');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::resource('posts', 'PostController')->middleware('auth');
Route::post('contact/submit', 'MessageController@submit');
Route::get('messages', 'MessageController@getMsg')->middleware(['auth','admin']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
