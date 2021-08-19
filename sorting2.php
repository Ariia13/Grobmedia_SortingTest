<?php

function bubbleSort(&$Array, $n) {
  $temp;
  for($i=0; $i<$n; $i++) {
    for($j=0; $j<$n-$i-1; $j++) {
      if($Array[$j]>$Array[$j+1]) {
        $temp = $Array[$j];
        $Array[$j] = $Array[$j+1];
        $Array[$j+1] = $temp;
      }
    }
  }
}

function PrintArray($Array, $n) { 
  for ($i = 0; $i < $n; $i++) 
    echo $Array[$i].", ";
  echo "\n".'<br>'; 
} 

$MyArray = array(87, 16, 15, 5, 4, 1);
 $n = sizeof($MyArray); 
echo "Array dari sorting no.1\n". '<br>';
PrintArray($MyArray, $n);
echo'<br>';

bubbleSort($MyArray, $n);
echo "Hasil sorting Array\n". '<br>';
PrintArray($MyArray, $n);
echo'<br>';

$sumArr = 0;
for($i=0; $i<count($MyArray); $i++){

$sumArr = $sumArr + $MyArray[$i];
}

echo $sumArr;
array_push($MyArray, $sumArr);
print_r($MyArray);
?>