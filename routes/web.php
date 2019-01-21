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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/todos/new', 'ToDoController@create')->name('todo.create');
Route::post('/todos/store', 'ToDoController@store')->name('todo.store');
Route::get('/todos/{id}/edit', 'ToDoController@edit')->name('todo.id.edit');
Route::post('/todos/{id}/update', 'ToDoController@update')->name('todo.id.update');
