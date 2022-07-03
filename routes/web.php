<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articleController;

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

Route::get('/home',[articleController::class , 'home']);
Route::post('/home',[articleController::class , 'subscribe']);
Route::get('/article/{id}' , [articleController::class , 'article'])->name('article');

