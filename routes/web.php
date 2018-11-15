<?php

///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*


Route::get('/', 'TasksController@index');

Route::get('/delete/{id}', 'TasksController@delete');

Route::get('/add', 'TasksController@addForm');

Route::post('/add', 'TasksController@add');

