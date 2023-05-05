<?php

$myFile = fopen("person.json", "r");
$size = filesize("person.json");

$jsonData = json_decode(fread($myFile, $size), true); # json_decode json seklinde yazilmis olan bir stringi associative bir arry'e dönüstürür.

echo "<pre>"; print_r($jsonData); echo "</pre>";
echo $jsonData['first_name'];


?>