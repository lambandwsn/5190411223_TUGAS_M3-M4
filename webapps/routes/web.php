<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::middleware('auth:web')->group(function(){
    Route::get('/home', [PageController::class, 'home']);
    Route::get('/profile', [PageController::class, 'profile']);
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'create']);
Route::post('/login', [AuthController::class, 'cekLogin']);
