<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return "hello route";
});

// Route::view('orders', 'orders');
// Route::get('/orders', function () {
//     return view('orders', ['name' => 'Allan Weber']);
// });
Route::get('/orders', [OrderController::class, 'index']);

Route::get('/orders/{order}', [OrderController::class, 'show']);
