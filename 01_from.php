<?php

// 変数を用意
$age = '';
$msg = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
    $msg = "私は{$age}歳です";
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="post">
        <div>
            <label for="">年齢</label>
            <br>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <p><?= htmlspecialchars("{$msg}", ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>
