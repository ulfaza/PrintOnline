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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/store', function () {
    return view('store');
});

Route::resource('pelanggan', 'PelangganController');
Route::resource('admin', 'AdminController');
