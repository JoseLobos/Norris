<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[RegisterController::class ,'show'])->name('register');

Route::post('/register',[RegisterController::class ,'register']);

Route::get('/login',[LoginController::class ,'show'])->name('login');

Route::post('/login',[LoginController::class ,'login']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('homeNorris');
    })->name('home');
});

Route::get('/app', function () {
    return view('layouts.appweb');
});