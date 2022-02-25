<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('list', [BiodataController::class, 'index'])->name('list_siswa');
Route::get('tambah', [BiodataController::class, 'create'])->name('tambah_siswa');
Route::post('store', [BiodataController::class, 'store']);
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit-siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update-siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');




Auth::routes();

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
