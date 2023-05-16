<?php

use App\Http\Controllers\JurusanPopulerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [JurusanPopulerController::class, 'index']);
Route::get('/tambah', [JurusanPopulerController::class, 'tambah']);
Route::post('/tambah', [JurusanPopulerController::class, 'store']);
Route::get('/hapus/{id}', [JurusanPopulerController::class, 'hapus']);
Route::get('/edit/{id}', [JurusanPopulerController::class, 'edit']);
Route::post('/edit/{id}', [JurusanPopulerController::class, 'update']);
Route::get('/lihat/{id}', [JurusanPopulerController::class, 'lihat']);

