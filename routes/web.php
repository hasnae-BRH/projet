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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix("admin")->group(function () {
    Route::resource('cities', \App\Http\Controllers\CityController::class);
});

Route::middleware('auth')->prefix("admin")->group(function () {
        Route::resource('users', \App\Http\Controllers\UserController::class);
});


Route::middleware('auth')->prefix("admin")->group(function () {
    Route::resource('ads', \App\Http\Controllers\AdController::class);
});

