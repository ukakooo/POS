<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

Route::get('/level', [App\Http\Controllers\LevelController::class, 'index']);

Route::get('/category', [App\Http\Controllers\ProductController::class, 'products']);

Route::prefix('category')->group(function () {
    Route::get('/fnb', [App\Http\Controllers\ProductController::class, 'fnb']);
    Route::get('/beauty-health', [App\Http\Controllers\ProductController::class, 'beautyhealth']);
    Route::get('/home-care', [App\Http\Controllers\ProductController::class, 'homecare']);
    Route::get('/baby-kid', [App\Http\Controllers\ProductController::class, 'babykid']);
});

Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);

Route::get('/sales', [App\Http\Controllers\SalesController::class, 'sales']);
