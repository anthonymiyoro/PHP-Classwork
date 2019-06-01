
<?php
 $counter = 0;
 $first_number= 0;
 $second_number= 1;

function createFibonacci($fibb_number,$counter,$first_number,$second_number) {
    
    // if the number of fibonnaci sequences is less than input add next number
    if ($fibb_number > $counter){
        $counter = $counter + 1;
        $result = $first_number + $second_number;
        $first_number = $second_number;
        $second_number = $result;

        echo $result;
        
        echo "  ";
        createFibonacci($fibb_number,$counter,$first_number,$second_number); //Recursive funcion :^\
    }
    else{
        $result = $first_number + $second_number;
        echo "done!!! ";
        echo $result;
        echo "  ";
        echo "<br>";
    }


   
}

createFibonacci(10,$counter,$first_number,$second_number); // call the function
?>

