<?php 
$pattern = "/\[([^\]]*)\]/";
$file = file_get_contents("loremipsum.txt", "r") or die("Unable to open file!");
$matches = [];
// echo $file . PHP_EOL;
preg_match_all($pattern, $file, $matches);
/* print all occurence */
print_r($matches[1]);
/* print unique & count */
print_r(array_count_values($matches[1]));
?>