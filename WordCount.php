<?php

$text = file_get_contents('alice.txt');
$text = strtolower($text);

$text = str_replace(",", "%", $text);
$text = trim(preg_replace('/\s+/', ' ', $text));
$text = str_replace(" ", ",", $text);
$textarray = explode(",", $text);
asort($textarray);

echo "<pre>";
print_r(array_count_values($textarray));
echo "<pre>";



?>