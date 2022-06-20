<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/plans/{id}', [MainController::class, 'plans'])->name('plans');
Route::get('/faq', [MainController::class, 'faq'])->name('faq');
Route::get('/createOrder', [MainController::class, 'createOrder'])->name('createOrder');
Route::post('/createOrder', [MainController::class, 'createOrderPost'])->name('createOrder');

