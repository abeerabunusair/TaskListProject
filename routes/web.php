<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
Route::get('/', [TaskController::class,'index']);
Route::post('/store', [TaskController::class,'store']);
Route::delete('/delete/{id}',[TaskController::class,'delete']);
Route::post('/edit/{id}',[TaskController::class,'show']);
Route::post('/update/{id}',[TaskController::class,'update']);



