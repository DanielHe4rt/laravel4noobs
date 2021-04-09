<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/u/{username}', [UsersController::class, 'getProfile'])->name('user-profile');
Route::get('/user/me', [UsersController::class, 'getMeProfile']);
Route::get('/test', [UsersController::class, 'test']);
