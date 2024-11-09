<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('product/index', [ProductController::class, 'index']);
Route::get('category/index', [CategoryController::class, 'index']);