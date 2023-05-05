<?php

// $myFile = fopen("file2.txt", "w");
$myFile = fopen("file2.txt", "a ");

    $str = "rahman pasha\n";
    fwrite($myFile, $str);
    fwrite($myFile, $str);


fclose($myFile);

$myFile = fopen("file2.txt", "r");
$size = filesize("file2.txt");

echo fread($myFile, $size);

?>