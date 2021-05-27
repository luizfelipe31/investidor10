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

/** Rota Principal */
Route::get('/', 'NewController@index')->name('home');
Route::get('/noticia/criar', 'NewController@create')->name('news_add');
Route::post('/noticia/criar', 'NewController@store')->name('news_create');
Route::post('/search', 'NewController@search')->name('home_search');
Route::get('/noticia/editar/{id}', 'NewController@edit')->name('news_edit');