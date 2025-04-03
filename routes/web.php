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

Route::get('form', 'FormController@index');
Route::post('form', 'FormController@index');

Route::get('form/index', 'FormController@index');
Route::post('form/index', 'FormController@index');
Route::get('form/thanks', 'FormController@thanks');

Route::get('graph', 'GraphController@index');
Route::get('graph/index', 'GraphController@index');

Route::get('answer', 'AnswerController@index');
Route::get('answer/index', 'AnswerController@index');

