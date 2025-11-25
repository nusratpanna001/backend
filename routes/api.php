<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::post('/register', [UsersController::class, 'register']); // Registration
Route::post('/login', [UsersController::class, 'login']);       // Login

// Protected user route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
