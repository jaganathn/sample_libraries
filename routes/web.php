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

Route::get('/Test', function () {
    return view('test');
});

//Web Routing
Route::get('/user/add_user', 'web\user@add_user');
Route::get('/user/search_user', 'web\user@search_user');
Route::get('/user/edit_user', 'web\user@edit_user');
Route::get('/user/update_user', 'web\user@update_user');

//MObile Routing
Route::get('/m/user/add_user', 'services\mobile\user@add_user');
Route::get('/m/user/search_user', 'services\mobile\user@search_user');
Route::get('/m/user/edit_user', 'services\mobile\user@edit_user');
Route::get('/m/user/update_user', 'services\mobile\user@update_user');

// Saravana api example for price calculation
// routing based on the url to mobile controller or web controller
Route::get('/mprice', 'MobileController@calculatePrice');
Route::get('/wprice', 'WebController@calculatePrice');
