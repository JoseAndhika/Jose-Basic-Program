<?php

use App\Http\Controllers\Econtroller;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/barang', [Econtroller::class, 'index'])->name('barang.index');
// Route::get('/barang/create', [Econtroller::class, 'create'])->name('barang.create');
// Route::post('/barang', [Econtroller::class, 'store'])->name('barang.store');
// Route::get('/barang/{id}', [Econtroller::class, 'show'])->name('barang.show');
// Route::get('/barang/{id}/edit', [Econtroller::class, 'edit'])->name('barang.edit');
// Route::put('/barang/{id}', [Econtroller::class, 'update'])->name('barang.update');
// Route::delete('/barang/{id}', [Econtroller::class, 'destroy'])->name('barang.destroy');

Route::resource('barang', Econtroller::class);
Route::get('about-me', function () {
    return view('about-me');
});