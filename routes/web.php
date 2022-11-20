<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::post('/signup-user', [UserController::class, 'registerUser'])->name('signupUser');
Route::post('/login-user', [UserController::class, 'loginUser'])->name('loginUser');

