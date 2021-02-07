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

Route::get('/', 'App\Http\Controllers\PageTopController@index');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('hello/auth', 'App\Http\Controllers\HelloController@getAuth');
Route::post('hello/auth', 'App\Http\Controllers\HelloController@postAuth');

Route::get('hello', 'App\Http\Controllers\HelloController@index');

Route::get('products', 'App\Http\Controllers\ProductController@index')->name('products.index');

Route::get('products/show/{id}', 'App\Http\Controllers\ProductController@show')->name('products.show');

Route::get('products/edit/{id}', 'App\Http\Controllers\ProductController@edit')->name('products.edit');

Route::get('products/create', 'App\Http\Controllers\ProductController@create')->name('products.create');

Route::post('products/store', 'App\Http\Controllers\ProductController@store');

Route::post('products/update/{id}', [ProductController::class, 'update']);

Route::post('products/destroy/{id}', [ProductController::class, 'destroy']);

Route::get('users/carts', 'App\Http\Controllers\CartController@index')->name('carts.index');

Route::post('users/carts', 'App\Http\Controllers\CartController@store')->name('carts.store');

Route::delete('users/carts', 'App\Http\Controllers\CartController@destroy')->name('carts.destroy');

Route::get('users/mypage', 'App\Http\Controllers\UserController@mypage')->name('mypage');

Route::get('users/mypage/edit', 'App\Http\Controllers\UserController@edit')->name('mypage.edit');

Route::get('users/mypage/address/edit', 'App\Http\Controllers\UserController@edit_address')->name('mypage.edit_address');

Route::put('users/mypage', 'App\Http\Controllers\UserController@update')->name('mypage.update');

Route::get('users/mypage/password/edit', 'App\Http\Controllers\UserController@edit_password')->name('mypage.edit_password');

Route::put('users/mypage/password', 'App\Http\Controllers\UserController@update_password')->name('mypage.update_password');

Route::post('products/{product}/reviews', 'App\Http\Controllers\ReviewController@store');

Route::get('users/mypage/post', 'App\Http\Controllers\ChatsController@index');

Route::get('users/mypage/messages', 'App\Http\Controllers\ChatsController@fetchMessages');

Route::post('users/mypage/messages', 'App\Http\Controllers\ChatsController@sendMessage');