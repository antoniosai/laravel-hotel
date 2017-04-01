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
Route::get('dashboard', function(){
    return view('templates.backend.layout');
});

Route::get('/', 'HotelController@index');

Route::get('location', [
    'uses' => 'HotelController@location',
    'as' => 'location'
]);

Route::get('facilities', [
    'uses' => 'HotelController@facilities',
    'as' => 'facilities'
]);

Route::get('room/all', [
    'uses' => 'RoomController@getAllRooms',
    'as' => 'get.room'
]);

Route::get('room/book/{id}', [
    'uses' => 'RoomController@book',
    'as' => 'book.room'
]);
