<?php
if($_GET["n"]<=0) echo "Введено некорректное кол-во элементов";
else{  
    $arr; $arr1; $arr2; 
    $n = $_GET["n"];
    for ($i =0; $i < $n; $i++)
    {
        $arr[$i] = mt_rand(-100,100);  
        $arr1[$i] = $arr[$i]; 
        $arr2[$i] = $arr[$i];       
    }
   
    echo "Создан массив<br>";
    printArr($arr);
    echo "Сумма элементов массива, раположенных после последнего отрицательного элемента: ";
    echo sum($arr);
    echo '<br>Сортировка "пузырьком" <br>'; 
    printArr(bubbleSort($arr1));
    echo "<br>Быстрая сортировка <br>"; 
    printArr(quickSort($arr2));    
}

    function printArr($arr)
    {
        foreach($arr as $item)
        {
            echo "$item ";
        }        
        echo "<br>";
    }

    function sum($arr)
    {
        $sum = 0;
        for($i = count($arr) - 1; $i >= 0; $i--)
        {            
            if($arr[$i] < 0) break;
            $sum += $arr[$i];
        }
        return $sum;
    }

    function bubbleSort($arr)
    {
        $count = 0;
        for($i = 0; $i < count($arr); $i++)
        {
            for($j = 0; $j < count($arr) - 1; $j++)
            {
                if($arr[$j]>$arr[$j+1])
                {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
                $count++;
            }
        }
        return $arr;       
    }

    function quickSort($arr)
    {
        $count = 0;
        if(count($arr) <= 1) return $arr;
        else
        {
            $left = [];
            $pivot = $arr[count($arr)-1];
            $right = [];
            for($i = 0; $i < count($arr) - 1; $i++)
            {
                if($arr[$i] < $pivot) array_push($left, $arr[$i]);
                else array_push($right, $arr[$i]);
                $count++;
            }
            return array_merge(quickSort($left), array($pivot), quickSort($right));
        }        
    }
?>