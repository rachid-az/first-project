<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\canalisationsController;
use App\Http\Controllers\isolationController;

// use App\Http\Controllers\appareilsController;
// use App\Http\Controllers\CanalisationsController;
// use App\Http\Controllers\EquipementsController;
// use App\Http\Controllers\PlomberieController;
// use App\Http\Controllers\IsolationController;
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

Route::get('/',[indexController::class,'index']);
Route::get('/canalisations',[canalisationsController::class,'index']);
Route::get('/isolation',[isolationController::class,'index']);

// Route::get('/appareils',[appareilsController::class,'appareils']);
// Route::get('/canalisation',[CanalisationsController::class,'canalisations']);
// Route::get('/equipements',[EquipementsController::class,'equipements']);
// Route::get('/isolation',[IsolationController::class,'isolation']);
// Route::get('/plomberie',[PlomberieController::class,'plomberie']);

