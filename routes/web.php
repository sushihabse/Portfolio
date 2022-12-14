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
    return view('admin.home');
})->name('admin.home');

Route::get('contact', function () {
    return view('admin.contactForm');
})->name('admin.contactForm');

Route::get('portfolio', function () {
    return view('admin.portfolio');
})->name('admin.portfolio');

Route::get('resume', function () {
    return view('admin.resume');
})->name('admin.resume');

Route::get('about', function () {
    return view('admin.about');
})->name('admin.about');
