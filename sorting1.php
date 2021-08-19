<?php 

function bubbleSort(&$arr)
{
    $n = sizeof($arr);
  
    for($i = 0; $i < $n; $i++)
    {
        $swapped = False;
  
        for ($j = 0; $j < $n - $i - 1; $j++)
        {     
            if ($arr[$j] < $arr[$j+1])
            {
                $t = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $t;
                $swapped = True;
            }
        }
  
        if ($swapped == False)
            break;
    }
}
          
$arr = array(15, 16, 1, 4, 5, 87); 
$len = sizeof($arr);
bubbleSort($arr);
  
echo "Hasil sorting Array : \n";
  
for($i = 0; $i < $len; $i++)
    echo $arr[$i].", ";
 