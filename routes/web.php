<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('test');
})->name('home');

Route::get('/test1', function () {
    return view('test1');
})->name('test1');
