<?php
    /* ====== programming logic exercises with PHP.toUppsercase() ======    
        Calculate century
    */
    function century(Int $year)
    {
        return ($year % 100 == 0) ? 
            $year/100 : 
                ($year/100) - (($year % 100)/100)+1;
    }
?>