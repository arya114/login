<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('/layouts/home', [
    "mahasiswas" => Mahasiswa::all()
    ]);
})->middleware(['auth']);

Route::get('/user/{nama}', function ($name) {
    return 'Halo' . $name;
});

Route::get('/login', [AuthController::class, 'loginView']
)->name('login');

Route::get('/register', function () {
    return view('register');
})->name("register");

Route::post('/action-register',
[AuthController::class , 'actionRegister']);

Route::post('/action-login',
[AuthController::class, 'actionLogin']);

Route::get('/logout', 
[AuthController::class, 'logout']);

Route::get('/mahasiswa',
[MahasiswaController::class, 'index'])->name('mahasiswa.index');

Route::get('/mahasiswa/create',
[MahasiswaController::class, 'create'])->name('mahasiswa.create');

Route::post('/mahasiswa',
[MahasiswaController::class, 'store'])->name('mahasiswa.store')->middleware(['auth']);


Route::get('/mahasiswa/show/{id}',
[MahasiswaController::class, 'show'])->name('mahasiswa.show')->middleware(['auth']);

