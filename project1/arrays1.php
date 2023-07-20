<?php
/* Сreate two arrays and output the first array with the least number of negative elements*/
if($_GET["n"]<=0) echo "Введено некорректное кол-во элементов";
else{  
$arr1; $arr2; 
$n = $_GET["n"];
for ($i =0; $i < $n; $i++)
{
    $arr1[$i] = mt_rand(-100,100);
    $arr2[$i] = mt_rand(-100,100);
}
echo "Созданы массивы<br>";
printArray($arr1); 
printArray($arr2);
echo '<br>';
if(negativeEl($arr1) < negativeEl($arr2)) {
    printArray($arr1);
    printArray($arr2);
}
else if (negativeEl($arr1) > negativeEl($arr2)){
    printArray($arr2);
    printArray($arr1);
}
else echo "Кол-во отрицательных элементов одинаково";
}

function printArray($arr)
{
    foreach($arr as $item)
    {
        echo "$item ";
    }
    echo "Кол-во отрицательных элементов "; echo negativeEL($arr);
    echo "<br>";
}

function negativeEl($arr)
{
    $count = 0;
    foreach($arr as $item)
    {
        if($item < 0) $count++;
    }
    return $count;
}
?>