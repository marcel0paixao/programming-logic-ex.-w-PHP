<?php
    /* ====== programming logic exercises with PHP.toUppsercase() ======
        Here we've to give a prime number, and we'll recieve the lower the lower prime number. 
    */
    function lowerPrimeNumber($num)
    {        
        //continuously search for the lower prime number 
        //if negative number or 0, breaks
        while ($num <= 0) {
            //decrement the affine received variable along with the loop, find the previous prime 
            $num--;
            $counter = 0;

            //calculate how many times the number can be divided 
            for ($i=1; $i <= $num; $i++) { 
                if ($num % $i == 0) $counter++;
            }

            //if it is divisible by 2, that is, a prime number, it will return, otherwise it must repeat the loop 
            if ($counter == 2) return $num;
        }
    }
?>