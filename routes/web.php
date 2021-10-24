<?php

use Illuminate\Support\Facades\Route;

// コントローラー
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// トップ画面を表示
Route::get('/', [HomeController::class, 'index'])->name('index');
// ログイン画面を表示
Route::get('/login', [AuthController::class, 'login'])->name('login');
// 新規登録画面を表示
Route::get('/register', [AuthController::class, 'register'])->name('register');
// 新規登録処理
Route::post('/register/store', [AuthController::class, 'register_store'])->name('register_store');
// 新規登録完了画面
Route::get('/register/success', [AuthController::class, 'register_success'])->name('register_success');
