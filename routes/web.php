<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
});
Route::get('/', function () {
    return view('frontend.pages.home');
});
