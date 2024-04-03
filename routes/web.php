<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeController;
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

Route::get('/', [CoffeController::class, 'index'])->name('index');
Route::get('/menu', [CoffeController::class, 'menu'])->name('menu');
Route::get('/tambah-kopi', [CoffeController::class, 'kopi'])->name('kopi');
Route::post('/add', [CoffeController::class, 'add'])->name('add');
