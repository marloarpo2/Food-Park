<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){

    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
});


