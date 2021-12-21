<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
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
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/data', [TestController::class, 'index'])->name('data');

Route::get('/form', [TestController::class, 'create'])->name('form');
Route::post('/form', [TestController::class, 'store'])->name('formsend');

Route::get('/edit/{id}', [TestController::class, 'edit']);
Route::post('/edit/{id}', [TestController::class, 'update']);

Route::get('/hapus/{id}', [TestController::class, 'destroy'])->name('hapus');