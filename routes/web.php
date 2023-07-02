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
    return view('users.accueil');
});
Route::get('/product', function () {
    return view('users.product');
});
Route::get('/blog', function () {
    return view('users.blog');
});

// Route::resource('layouts', UsersController::class);

// Route::resource('users', UsersController::class);

// Route::get('/', [UsersController::class, 'accueil']);

// Route::get('/product', [UsersController::class, 'product']);

// Route::get('/blog', [UsersController::class, 'blog']);
