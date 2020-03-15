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

Route::get('/', 'GymController@index')->name('home');
Route::get('/about', 'GymController@about')->name('about');
Route::get('/bookingTrainer', 'GymController@bookingTrainer')->name('bookingTrainer');


// Route::get('/', function () {
//     return view('welcome');
// });
