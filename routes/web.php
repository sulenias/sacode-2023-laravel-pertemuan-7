<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// HOME
Route::get('/', function () {
    return view('pages/home');
});

// PROFILE
Route::get('/profile', function () {
    return view('pages/profile');
});

// GALLERY
Route::get('/products', function () {
    return view('pages/products');
});

// CONTACT
Route::get('/contact', function () {
    return view('pages/contact');
});
