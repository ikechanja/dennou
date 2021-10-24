<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //ログイン画面を表示
    public function login()
    {
        return view('auth.login');
    }
    // 新規登録画面を表示
    public function register()
    {
        return view('auth.register');
    }
    // 新規登録処理
    public function register_store()
    {
    }
}
