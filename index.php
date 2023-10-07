<?php 
$greeting = "Hello world";
//array

$names = [
    "minkhant",
    "aungaung",
    "kyawkyaw"
];

require "index.view.php";

$person = [
    "name" => "MinKhant",
    "age" => 19,
    "hair" => "black"
];

$person["school"] = "TU";

echo "<pre>";
var_dump($person);
// die(var_dump($person));
require "index.associate_arr.php";

$task = [
    "title" => "finish homework",
    "due" => "today",
    "complete" => true
];

require "index.bool.php";
?>