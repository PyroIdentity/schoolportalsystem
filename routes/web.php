<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
    return view('Northgate_College_Homepage');
=======
    return view('frontpage');
>>>>>>> 5cf1f542ee07488c5204a7f4de8550d103981fc0
});

Route::get('/register', function () {
    return view('RegistrationForm');
});