<?php

use Illuminate\Support\Facades\Route;

// コントローラー
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// トップ画面を表示
Route::get('/', [HomeController::class, 'index'])->name('index');
// ログイン画面を表示
Route::get('/login', [AuthController::class, 'login'])->name('login');
