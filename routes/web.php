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
Route::get('socket', ['as' => 'socket.index', 'uses' => 'SocketController@index']);
Route::post('send/message', ['as' => 'socket.send.message', 'uses' => 'SocketController@sendMessage']);
Route::get('write/message', ['as' => 'socket.write.message', 'uses' => 'SocketController@writeMessage']);
