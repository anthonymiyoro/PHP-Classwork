<?php

// Import number formatter
$Number_formarter = new NumberFormatter("en", NumberFormatter::SPELLOUT);

// Intialize variables
 $counter = 0;
 $first_number= 0;
 $second_number= 1;

function createFibonacci($fibb_number,$counter,$first_number,$second_number) {
    $Number_formarter = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    
    // if the number of fibonnaci sequences is less than input add next number
    if ($fibb_number > $counter){
        // Make second number first and result of calculation second
        // 1+ 2 = 3
        // 2 + 3 = 5
        // 3 + 5 = 8

        $counter = $counter + 1;
        $result = $first_number + $second_number;
        $first_number = $second_number;
        $second_number = $result;

        // Print out result
        echo $result; 
        echo " : ";
        echo $Number_formarter->format($result);
        echo "</br>";
        
        createFibonacci($fibb_number,$counter,$first_number,$second_number); //Call function inside itself to make it recursive
    }
    else{
        // Calculate final result and print
        $result = $first_number + $second_number;

        echo $result; 
        echo " : ";
        echo $Number_formarter->format($result);
        echo "<br>";
        
    }


   
}

createFibonacci(10,$counter,$first_number,$second_number); // call the function
?>

