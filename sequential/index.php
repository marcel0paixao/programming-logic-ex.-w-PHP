<?php
    /* ====== programming logic exercises with PHP.toUppsercase() ======
        We've an array of 18 arrays, that we need to know if I delete a number
        the array will have sense in the asc. sequential way, and return true
        if possible, if not, returns false. Arrays with only one number 
        repeated many times, have to return true.
    */

    //arrays declaration
    $arr = [
        0 => [1, 3, 2, 1], // false
        1 => [1, 3, 2], // true
        2 => [1, 2, 1, 2], // false
        3 => [3, 6, 5, 8, 10, 20, 15], //false
        4 => [1, 1, 2, 3, 4, 4], // false
        5 => [1, 4, 10, 4, 2], //false
        6 => [10, 1, 2, 3, 4, 5], // true
        7 => [1, 1, 1, 2, 3], //false
        8 => [0, -2, 5, 6], // true
        9 => [1, 2, 3, 4, 5, 3, 5, 6], // false
        10 => [40, 50, 60, 10, 20, 30], // false
        11 => [1, 1], // true
        12 => [1, 2, 5, 3, 5], // true
        13 => [1, 2, 5, 5, 5], // false
        14 => [10, 1, 2, 3, 4, 5, 6, 1], // false
        15 => [1, 2, 3, 4, 3, 6], // true
        16 => [1, 2, 3, 4, 99, 5, 6], // true
        17 => [123, -17, -5, 1, 2, 3, 12, 43, 45], // true
        18 => [3, 5, 67, 98, 3] // true
    ];
    
    //function that checks if the sequence when deleting a element of the array 
    function ascSequence($arr)
    {
        //loop to eliminate a position from the array given as parameter, and check if there 
        //is a sequence, if not, it will repeat until it finishes the array and returns result 
        for ($i=0; $i < count($arr); $i++) { 
            //declaring the temp variable to be able to unset without affecting the original array 
            $temp = $arr;
            unset($temp[$i]);

            //declaring sequenced variable for comparison purposes 
            $sorted = $temp;
            sort($sorted);
            
            //re-indexing $temp keys to make comparison possible 
            $reindexed_temp = array_values($temp);

            //variable to check for repeated number 
            $repeatedNumbers = false;

            if (max(array_count_values($reindexed_temp)) > 1) {
                //if repeated, we check that arr is the size of the number of times it was repeated,
                //since arrs filled with the exact same number are true, so writing the repeating boolean 
                if (sizeof($reindexed_temp) == max(array_count_values($reindexed_temp))) {
                    $repeatedNumbers = false;
                }
                else {
                    $repeatedNumbers = true;
                }
            }
            //checks if the variables are equal and if there is a repeated number that is not arr of the same number in all indices 
            if ($sorted == $reindexed_temp && !$repeatedNumbers) {
                return 'true';
            }
        }
        return 'false';
    }

    //displaying result and preventing the comma from repeating at the end 
    for ($i=0; $i < count($arr); $i++) { 
        echo '[';
        for ($j=0; $j < count($arr[$i]); $j++) { 
            echo $arr[$i][$j] . ($j+1 == count($arr[$i]) ? '' : ', ');
        }
        echo '] ';
        echo ascSequence($arr[$i]) . '<br/>';
    }
?>