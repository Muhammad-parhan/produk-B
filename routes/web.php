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

Route::get('/', function () {
    return view('welcome');
});

Route::get("pro","prdctrl@tampil");
Route::get("pro/add","prdctrl@add");
Route::post("pro/addProcess","prdctrl@addProcess");
Route::get('produk/edit/{id}','prdctrl@edit');
Route::patch('produk/{id}','prdctrl@editProcess');
Route::delete('produk/{id}','prdctrl@delete');