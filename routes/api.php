<?php
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);
Route::post('products', [App\Http\Controllers\ProductController::class, 'store']);