<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// About page
Route::get('/abouts', function () {
    return view('about');
})->name('about-us');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
