<?php
$counter =0;
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
$unique_nums = array_unique($array);                
$duplicates = count($array) - count($unique_nums);  

if ($duplicates == 0) {
    echo "There are no duplicates ";
    echo "\n";
}
echo "Total number of duplicate elements found in the array is:  " . $duplicates;

?>