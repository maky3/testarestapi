<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::post('/users', [UserController::class, 'createUser'])->name('user.create');
Route::get('/users/{id}',[UserController::class, 'getUser'])->name('user.show');
Route::put('/users/{id}',[UserController::class, 'updateUser'])->name('user.update');
Route::delete('/users/{id}', [UserController::class, 'deleteUser'])->name('user.delete');
Route::middleware('auth:api')->post('login', [AuthController::class, 'login'])->name('user.login');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
