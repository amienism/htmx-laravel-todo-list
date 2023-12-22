<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/auth')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    });
});

Route::prefix('/app')->group(function () {
    Route::get('/home', function () {
        return view('app.home');
    });
});

