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

Route::get('/', '\App\Http\Controllers\HomeController@index')->name('reg.index');
Route::get('/user', '\App\Http\Controllers\HomeController@ind')->name('user.ind');
Route::get('/user/{user}/edit', '\App\Http\Controllers\HomeController@edit')->name('user.edit');
Route::patch('/user/{user}', '\App\Http\Controllers\HomeController@update')->name('user.update');



Route::get('/products', '\App\Http\Controllers\MyFerstController@index')->name('products.index');
Route::get('/products/create', '\App\Http\Controllers\MyFerstController@create')->name('products.create');
Route::post('/products', '\App\Http\Controllers\MyFerstController@store')->name('products.store');
Route::get('/products/{product}', '\App\Http\Controllers\MyFerstController@show')->name('products.show');
Route::get('/products/{product}/edit', '\App\Http\Controllers\MyFerstController@edit')->name('products.edit');
Route::patch('/products/{product}', '\App\Http\Controllers\MyFerstController@update')->name('products.update');
Route::delete('/products/{product}', '\App\Http\Controllers\MyFerstController@destroy')->name('products.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
