<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>

        <?php
        $personal_date =  ['name' => '玉葱', 'price' => '200', 'area' => '北海道',];

        foreach ($personal_date as $key => $value) {
            echo "{$key}:{$value}<br>";
        }
        ?>
    </p>
</body>

</html>