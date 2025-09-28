<?php

$age = '';
$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $age = $_POST['message'];

    // バリデーション
    if (empty($age)) {
        $err_msg = '年齢を入力してください。';
    } else {
        $msg = "私は、{$age}歳です";
    }
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
            <?php if (!empty($err_msg)): ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>

            <label for="">年齢</label><br>
            <input type="number" name="message">

        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p><?= htmlspecialchars("{$msg}", ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>
