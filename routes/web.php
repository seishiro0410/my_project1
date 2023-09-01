<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/top', [App\Http\Controllers\TopController::class, 'index']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']); // 追加
Route::post('/login/sign_in', [App\Http\Controllers\LoginController::class, 'sign_in']);
Route::post('/login/register', [App\Http\Controllers\LoginController::class, 'register']); // 追加
Route::get('/login/unregister', [App\Http\Controllers\LoginController::class, 'unregister']); // 追加