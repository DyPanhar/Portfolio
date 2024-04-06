<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.navbar');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/test', function () {
    return view('test');
});
