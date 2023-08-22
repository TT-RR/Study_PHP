<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>IF</title>
</head>

<body>

    <?php

    $x = 99 * 99;
    $y = 77 * 77;

    if ($x > 9800) {
        echo '変数xは9800より大きいです。';
    }
    if ($y > 6000) {
        echo '変数yは6000より大きいです。';
    }
    ?>

    <?php
    $age = '19';
    if ($age >= 20) {
        echo 'あなたは成人です。';
    } else {
        echo 'あなたは未成年です。';
    }
    ?>

</body>

</html>