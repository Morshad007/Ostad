<?php
function removeEvenNumbers($numbers)
{
    $oddNumbers = [];
    foreach ($numbers as $number) {
        // echo $number . " ";
        if ($number % 2 == 1) {
            $oddNumbers[] = $number;
        }
    }
    print_r($oddNumbers);
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
removeEvenNumbers($numbers);


?>