<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::post('/login_post', 'loginPost')->name('loginPost');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth')->name('dashboard');

Route::post('/event_create', [EventController::class, 'event_create'])->middleware('auth')->name('event_create');
Route::post('/event_delete', [EventController::class, 'event_delete'])->middleware('auth')->name('event_delete');



