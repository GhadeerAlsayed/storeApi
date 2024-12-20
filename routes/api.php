<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemCartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);
Route::resource('order',OrderController::class);
Route::resource('item',ItemCartController::class);


