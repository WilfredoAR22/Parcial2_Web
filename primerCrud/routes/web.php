<?php

use App\Http\Controllers\ProductosController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/create', [ProductosController::class, 'create'])->name('productos.create');
Route::get('/edit', [ProductosController::class, 'edit'])->name('productos.edit');
Route::get('/show', [ProductosController::class, 'show'])->name('productos.show');
