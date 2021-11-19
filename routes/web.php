<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user:home');
Route::get('/user/add', [App\Http\Controllers\UserController::class, 'create'])->name('user:create');
Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user:store');
Route::get('/user/edit/{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('user:edit');
Route::post('/user/update/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('user:update');