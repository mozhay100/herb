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

Route::get('/herbs', [App\Http\Controllers\HerbsController::class,'index']);

Route::get('/herbs/show/{id}', [App\Http\Controllers\HerbsController::class,'show']);

Route::get('/herbs/create', [App\Http\Controllers\HerbsController::class,'create'])->middleware('auth');

Route::post('/herbs', [App\Http\Controllers\HerbsController::class,'store']);

Route::delete('/herbs/{id}', [App\Http\Controllers\HerbsController::class,'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
