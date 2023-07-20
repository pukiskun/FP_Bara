<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\ArticleController;
>>>>>>> e9c5caa45deb2305dd0a8b0944f665766f04b5fa

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======

Route::resource('admin', ArticleController::class);
>>>>>>> e9c5caa45deb2305dd0a8b0944f665766f04b5fa
