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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::prefix('notifications')->group(function () {
    Route::get('/','NotificationController@index')->name('notifications');
    Route::get('/{id}','NotificationController@index')->name('notifications/{id}');
});

Route::prefix('chats')->group(function () {
    Route::get('/','ChatController@index')->name('chats');
    Route::get('/{id}','ChatController@index')->name('chats/{id}');
});
