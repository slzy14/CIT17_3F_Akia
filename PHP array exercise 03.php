<?php
$ArrayLength = (int)readline('Input the number of elements to be stored in the array :');
error_reporting(E_ERROR | E_PARSE);
echo "Input ".$ArrayLength." elements in the array :";
$array = range($ArrayLength);
echo "\n";
for ($i = 0; $i < $ArrayLength; $i++) {
     $elements= (int)readline('element: ');
      $array[]=$elements;
      
}
$oddArray = array();
$evenArray = array();
echo "Orginal array: \n";
$size = count($array);
for ($i = 0; $i < $size; $i++) {
    echo "$arr[$i] ";
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($array[$i] % 2 == 0) {
        $evenArray[$j] = $array[$i];
        $j++;
    } else {
        $oddArray[$k] = $array[$i];
        $k++;
    }
}
echo "\nThe Even elements are : \n";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
echo "\nThe Odd elements are  \n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>