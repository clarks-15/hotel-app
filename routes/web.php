<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); //sesuai nama  "index".blade.php
});

Route::get('/login', function () {
    return view('login'); 
});

Route::get('/register', function () {
    return view('register'); 
});

Route::get('/dashboard', function () {
    return view('dashboard'); 
});