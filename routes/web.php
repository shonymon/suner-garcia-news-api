<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\NoticiasController;

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

// Get Noticias At Home
Route::get('/',  [NoticiasController::class, 'getNoticiasWithAutores'])->name('noticias');
Route::post('/', [NoticiasController::class, 'getNoticiasWithAutores'])->name('noticias');

// Testing Routes
Route::get('/test', [TestController::class, 'test'])->name('test');