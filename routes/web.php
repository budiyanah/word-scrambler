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
    return view('word');
});

Route::group(['prefix' => 'kendaraan'], function(){
 
    Route::get('/', 'KendaraanController@index');
    Route::get('/create', 'KendaraanController@create');
    Route::post('/store', 'KendaraanController@store');
    Route::get('/show/{id}', 'KendaraanController@show');
    Route::post('/update/{id}', 'KendaraanController@update');
    Route::post('/destroy/{id}', 'KendaraanController@destroy');
 
});

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/home', 'HomeController@index')->name('home');