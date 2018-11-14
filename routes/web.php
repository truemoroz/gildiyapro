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

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/delete/{id}', 'TasksController@delete');

Route::get('/tasks/add', 'TasksController@addForm');

Route::post('/tasks/add', 'TasksController@add');

//Route::get('/tasks/add_test', 'TasksController@addTest');
