<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/', function () {
    return "Hello Laravel";
});


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

