<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegisterRequest;

use App\Models\User;

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
    public function register_success()
    {
        return view('auth.register_success');
    }
    // 新規登録処理
    public function register_store(RegisterRequest $request)
    {
        // 会員登録のデータを受け取る
        $inputs = $request->all();
        // パスワード確認
        if ($inputs['password'] != $inputs['password_conf']) {
            \Session::flash('password_error', '確認用のパスワードと異なります');
            return redirect(route('register'));
        }
        // パスワードハッシュ化
        $password_hash = password_hash($request['password'], PASSWORD_DEFAULT);
        $inputs['password'] = $password_hash;
        \DB::beginTransaction();
        try {
            User::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            \Session::flash('error_msg', 'ユーザーネーム、またはメールアドレスが既に使用されています。');
        }
        \Session::flash('success_msg', 'おめでとうございます。新規会員登録が完了しました。');
        return redirect(route('register_success'));
    }
}
