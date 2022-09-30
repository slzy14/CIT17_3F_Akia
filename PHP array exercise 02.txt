<?php
$counter=0;
$ArrayLength = (int)readline('Input the number of elements to be stored in the array :');
error_reporting(E_ERROR | E_PARSE);
echo "Input ".$ArrayLength." elements in the array :";
$array = range($ArrayLength);
echo "\n";
for ($i = 0; $i < $ArrayLength; $i++) {
     $elements= (int)readline('element - '.$counter. ': ');
      $array[]=$elements;
      $counter++;
}
echo "\n";
$new_array=array_count_values($array);

while (list ($key, $val) = each ($new_array)) {
echo "$key occurs  $val times";
echo "\n";
}
?>