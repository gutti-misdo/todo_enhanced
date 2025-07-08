<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="check.php" method="post">
    <p>ユーザ名：<input type="text" name="user"></p>
    <p>パスワード：<input type="password" name="password"></p>
    <p><button type="submit">ログイン</button></p>
    <p><a href="register.php">新規登録</a></p>
    </form>
</body>
</html>