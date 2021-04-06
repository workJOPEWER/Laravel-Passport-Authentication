<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('/all-posts', [\App\Http\Controllers\PostController::class, 'allPosts']);

Route::middleware('auth:api')->group(function () {
	Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
	Route::resource('/posts', \App\Http\Controllers\PostController::class);

});
