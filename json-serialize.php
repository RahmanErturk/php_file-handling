<?php 

$brands = ["samsung", "apple", "lg", "microsoft"];

$jsonString = json_encode($brands);
echo gettype($jsonString);
echo $jsonString;

// $myFile = fopen("products.json", "w");
// fwrite($myFile, $jsonString);
// fclose($myFile);

$user = [
    "username" => "king_rahman",
    "password" => "asd123asd34",
    "email" => "rking@myking.com",	
];

$jsonUser = json_encode($user, JSON_PRETTY_PRINT);

$myFile = fopen("user.json", "w");
fwrite($myFile, $jsonUser);
fclose($myFile);


?>