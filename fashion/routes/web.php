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
    return view('index');
})->name("/");
Route::get('women', function () {
    return view('women');
})->name("women");
Route::get('men', function () {
    return view('men');
})->name("men");
Route::get('products', function () {
    return view('products');
})->name("products");
Route::get('single', function () {
    return view('single');
})->name("single");
Route::get('contact', function () {
    return view('contact');
})->name("contact");
