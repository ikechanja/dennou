@include('header')
<section class="register-wrapper">
    <div class="container">
        <div class="register-flex">
            <div>
                <h2>新規登録</h2>
                <p>最初のステップは簡単です。新規登録画面へようこそ。</p>
                <form method="POST">
                    <p>メールアドレス</p>
                    <input class="sign-input" type="email" name="email">
                    <p>ペンネーム</p>
                    <input class="sign-input" type="text" name="username">
                    <p>プロフィール（400文字以内）</p>
                    <textarea class="sign-text" name="profile"></textarea>
                    <p>パスワード</p>
                    <input class="sign-input" type="password" name="password">
                    <p>パスワード（確認）</p>
                    <input class="sign-input" type="password" name="password_conf">
                    <input class="sign-submit" type="submit" value="新規登録">
                </form>
            </div>
        </div>
    </div>
</section>