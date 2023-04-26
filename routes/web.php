<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

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

// sengaja dibikin gini => defaultnya radionbendahara.com tuh ke login
// jadi nanti di middleware dibikin aja kalo blm login ke lemparnya ke radionbendahara.com/dashboard
// defaultny yg bagus gini
Route::get('/', [LoginController::class, 'index']);

Route::controller(AdminController::class)->group(function() {
    Route::get('/admin', 'index');
    Route::get('/admin/bendahara', 'bendahara');
    Route::get('/admin/users', 'user');

    Route::post('admin/users', 'add_user');
});

Route::controller(DashboardController::class)->group(function() {
    Route::get('/dashboard', 'index');
    Route::get('/bendahara', 'bendahara');
    Route::get('/user', 'user');
});