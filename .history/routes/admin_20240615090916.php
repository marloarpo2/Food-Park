<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    Route::get('login', [AdminAuthController::class, 'login'])->name('login');
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});


