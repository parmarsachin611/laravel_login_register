<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/forget-password', [ForgotPasswordController::class,'getEmail']);
Route::post('/forget-password', [ForgotPasswordController::class,'postEmail']);

Route::get('/reset-password/{token}', [ResetPasswordController::class,'getPassword']);
Route::post('/reset-password', [ResetPasswordController::class,'postPassword']);