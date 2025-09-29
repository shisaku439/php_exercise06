<?php

$sum = "";
$msg = "";
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $num1 = filter_input(INPUT_GET, 'num1');
    $num2 = filter_input(INPUT_GET, 'num2');
    $num3 = filter_input(INPUT_GET, 'num3');

    if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
        $sum = $num1 + $num2 + $num3;
        $msg = "合計値は{$sum}です";
    } else {
        $err_msg = "全てに数字を入力してください。";
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
    <h1>数字を入力してください</h1>
    <form action="" method="get">
        <?php if ($err_msg) : ?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="">数値1</label><br>
            <input type="number" name="num1">
        </div>
        <div>
            <label for="">数値2</label><br>
            <input type="number" name="num2">
        </div>
        <div>
            <label for="">数値3</label><br>
            <input type="number" name="num3">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if ($msg) : ?>
        <div>
            <?= htmlspecialchars("{$msg}", ENT_QUOTES, 'UTF-8') ?>
        </div>
    <?php endif; ?>
</body>
