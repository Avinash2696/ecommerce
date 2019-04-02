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



Route::get('/','ProjectsController@refresh');

Route::auth();
Route::post('/registered','ProjectsController@store')->middleware('auth');



Route::get('/registered', function () {
    return view('registered');
});

Route::get('/home', function () {
    return view('home');
});
Route::delete('/registered/{id}', 'ProjectsController@destroy');


Route::get('/update/{id}','ProjectsController@edit');

Route::get('/{id}','ProjectsController@update');
