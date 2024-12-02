<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProvidersItemsController;
use App\Http\Controllers\frontend\AjaxController;
// Define your API routes before the catch-all route

Route::get('/', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home');
Route::get('/cart', [App\Http\Controllers\frontend\HomeController::class, 'cart'])->name('frontend.cart');
Route::get('/get-products/{categoryId}', [AjaxController::class, 'getProducts']);
Route::get('/get-items/{productId}', [AjaxController::class, 'getItems']);

