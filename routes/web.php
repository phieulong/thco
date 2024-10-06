<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home');
});


Route::get('/products', function () {
    return view('/product_listing');
});


Route::get('/products/{id}', function ($id) {
    return view('/product');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
