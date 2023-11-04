
////////////////////////////2///////////////////////////////////

// $users = [];

// if (isset($_COOKIE['users'])) {
//     $cookieValue = $_COOKIE['users'];
//     $users = json_decode($cookieValue, true);
// }

// if (isset($_POST["name"]) && isset($_POST["surname"])) {
//     $name = $_POST["name"];
//     $surname = $_POST["surname"];

//     $user = [
//         "name" => $name,
//         "surname" => $surname
//     ];

//     $users[] = $user;

//     $jsonUsers = json_encode($users);
//     setcookie("users", $jsonUsers, time() + 3600, "/");

//     foreach ($users as $user) {
//         echo "Name: " . $user["name"] . "<br>";
//         echo "Surname: " . $user["surname"] . "<br>";
//         var_dump($user);
//     }
// } else {
//     echo "none";
// }


///////////////////////3////////////////////
// $arr = [
//     [

//         "age" => "21",
//         "height" => "174",

//     ],
//     [

//         "age" => "22",
//         "height" => "161",

//     ],
//     [

//         "age" => "22",
//         "height" => "175",

//     ],
//     [

//         "age" => "22",
//         "height" => "165",

//     ],
//     [

//         "age" => "23",
//         "height" => "165",

//     ],
// ];

// usort($arr, function($a, $b) {
//     return $a['height'] - $b['height'];
// });

// foreach ($arr as $item) {
//     echo "<pre>";
//     var_dump($item);
// }


