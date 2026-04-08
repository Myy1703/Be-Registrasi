<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return response()->json([
        'message' => 'API has Run!!',
        'version' => '1.0'
    ]);
});

Route::post('register', [App\Http\Controllers\AuthController::class, 'registration']);
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);

// Roles endpoint (public agar bisa diakses saat create user)
Route::apiResource('roles', App\Http\Controllers\RoleController::class);

// Users endpoint (public untuk development, tambahkan auth:sanctum untuk production)
Route::apiResource('users', App\Http\Controllers\UserController::class);
