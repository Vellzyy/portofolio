<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio');
});

Route::get('/gallery', function () {
    return view('home');
});