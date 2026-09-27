<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Northgate_College_Homepage');
})->name('homepage');

Route::get('/register', function () {
    return view('RegistrationForm');
})->name('register');