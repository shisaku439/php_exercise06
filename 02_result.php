<?php

// 変数を用意
$name = '';
$msg = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['message'];
    if (!empty($name)) {
        $msg = "私の名前は、{$name}です。";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>元のファイルへ</title>
</head>

<body>
    <p><?= htmlspecialchars("{$msg}", ENT_QUOTES, 'UTF-8') ?></p>
    <a href="02_form.php">戻る</a>
</body>

</html>
