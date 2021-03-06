<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductController@index');
Route::get('/create', 'ProductController@create');
Route::post('/product-store', 'ProductController@store');
Route::get('/edit/{id}', 'ProductController@edit');
Route::patch('/product-update/{id}', 'ProductController@update');
Route::get('/destroy/{id}', 'ProductController@destroy');
Route::get('/detail-product/{id}', 'ProductController@show');