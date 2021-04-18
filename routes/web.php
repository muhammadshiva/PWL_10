<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;

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

Route::get('article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/mahasiswa/nilai/{nim}', [MahasiswaController::class, 'khs'])->name('mahasiswa.khs');
Route::get('/mahasiswa/nilai/{nim}/print_khs', [MahasiswaController::class, 'print_khs'])->name('mahasiswa.printKhs');
Route::resource('articles', ArticleController::class);
