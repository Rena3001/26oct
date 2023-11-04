<?php
$arr = [
    [
        "name" => "Rena",
        "surname" => "Verdiyeva",
        "age" => 25,
        "height" => 174,
        "weight" => 70
    ],
    [
        "name" => "Aytac",
        "surname" => "Huseynov",
        "age" => 22,
        "height" => 161,
        "weight" => 55
    ],
    [
        "name" => "Sabit",
        "surname" => "Bagirov",
        "age" => 22,
        "height" => 175,
        "weight" => 65
    ],
    [
        "name" => "Shems",
        "surname" => "Mahmudova",
        "age" => 22,
        "height" => 165,
        "weight" => 60
    ],
    [
        "name" => "Gulya",
        "surname" => "Aliyeva",
        "age" => 23,
        "height" => 165,
        "weight" => 75
    ],
];


if (isset($_GET["sort"])) {
    $sortType = $_GET["sort"];

    if ($sortType === "yashagore") {
        usort($arr, function ($a, $b) {
            return $a["age"] - $b["age"];
        });
    } elseif ($sortType === "boyagore") {
        usort($arr, function ($a, $b) {
            return $a["age"] - $b["age"];
        });
    } elseif ($sortType === "chekiyegore") {
        usort($arr, function ($a, $b) {
            return $a["age"] - $b["age"];
        });
    }
}
$json = json_encode($arr);
setcookie("users", $json);
$usersfromCookie = json_decode($_COOKIE['users']);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($usersfromCookie as $user) { ?>
        <div style="display:flex; column-gap:10px; margin-bottom:10px;">
            <div>
                <?= $user->name ?>
            </div>
            <div>
                <?= $user->surname ?>
            </div>
            <div>
                <?= $user->age ?>
            </div>
            <div>
                <?= $user->height ?>
            </div>
            <div>
                <?= $user->weight ?>
            </div>
        </div>
        <?php
    }
    ?>

    <div style="display:flex; column-gap:10px; margin-bottom:10px;">
        <a href="./index.php?sort=yashagore">Yasha Gore</a>
        <a href="./index.php?sort=boyagore">Boya Gore</a>
        <a href="./index.php?sort=chekiyegore">Chekiye Gore</a>
    </div>
</body>

</html>