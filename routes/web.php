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
//Route::get('/', function () {return view('welcome');});

Route::get('/', 'WorkoutmenusController@index');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::resource('workoutmenus', 'WorkoutmenusController');

Route::get('menudetail/armsdetail', function () {return view('menudetail.armsdetail');});
Route::get('menudetail/shouldersdetail', function () {return view('menudetail.shouldersdetail');});
Route::get('menudetail/backdetail', function () {return view('menudetail.backdetail');});
Route::get('menudetail/legsdetail', function () {return view('menudetail.legsdetail');});
Route::get('menudetail/chestsdetail', function () {return view('menudetail.chestsdetail');});