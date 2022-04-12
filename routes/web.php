<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/courses', function () {
    return view('site.courses');
})->name('site.courses');

Route::get('/contact', function () {
    return view('site.contact');
})->name('site.contact');
