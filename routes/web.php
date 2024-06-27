<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{id}', function ($id) {});
Route::post('users/{id}', function ($id) {});
Route::put('users/{id}', function ($id) {});
Route::delete('users/{id}', function ($id) {});

Route::get('halo', function () {
    return 'ini laravel saya';
});

Route::get('angka/{angka1}', function ($angka1) {
    return 'Angka : '. $angka1;
});

Route::get('penjumlahan/{angka1}/{angka2}', function ($angka1, $angka2) {
    return 'Total : '. $angka1 + $angka2;
});

Route::get('/user', function (Request $request) {
    return $request;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tabel', [PageController::class, 'dataTabel']);



// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('createsiswa', [SiswaController::class, 'create']);
// Route::get('storesiswa', [SiswaController::class, 'store']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
