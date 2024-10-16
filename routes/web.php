<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome'); //merujuk ke file welcome.blade.php
});