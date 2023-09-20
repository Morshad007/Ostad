<?php
function evenNumbersForLoop($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

// Function to print even numbers using a while loop
function evenNumbersWhileLoop($start, $end, $step){
    $i = $start;
    while($i <= $end){
        echo $i. " ";
        $i += $step;
    }
}


// Function to print even numbers using a do-while loop
function evenNumbersDoWhileLoop($start, $end, $step){
    $i = $start;
    do{
        echo $i. " ";
        $i += $step;
    }while($i <= $end);
}


echo evenNumbersForLoop(2, 20, 2);
echo evenNumbersWhileLoop(2, 20, 2);
echo evenNumbersDoWhileLoop(2, 20, 2);

?>