<?php

use Illuminate\Support\Facades\Route;

Route::view("/", 'home')->name('home');
Route::view("/about", 'about')->name('about');
Route::view("/history", 'history')->name('history');
Route::view("/achievement", 'achievement')->name('achievement');
Route::view("/contact", 'contact')->name('contact');














