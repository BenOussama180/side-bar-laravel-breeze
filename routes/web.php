<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])
    ->group(function () {
        Route::view('profile', 'profile')
            ->name('profile');
        Route::view('orders', 'orders')
            ->name('orders');
    });

require __DIR__ . '/auth.php';
