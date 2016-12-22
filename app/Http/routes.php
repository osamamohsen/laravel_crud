<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users','UserController@show');
Route::get('/users/edit/{id}','UserController@edit');
Route::post('/users/edit/{id}','UserController@update');
Route::post('/users/delete/{id}','UserController@show');
Route::post('/users','UserController@insert');