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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/datepicker','HomeController@datepicker')->name('datepicker');

//Route::get('/fletes', 'FletesController@index')->name('index');

//Route::get('/fletes/create', 'FletesController@create')->name('create');

//Route::get('/fletes/edit', 'FletesController@edit')->name('edit');

Route::resource('fletes','FletesController');