<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;

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

Route::get('/admin/users/login', [LoginController::class, 'index'])->name('login');

Route::post('/admin/users/login/store', [LoginController::class, 'store'])->name('shop');

Route::middleware(['auth'])->group(function () {
    Route::get('admin', [MainController::class, 'index'])->name('admin');
    Route::get('admin/main', [MainController::class, 'index']);
});
