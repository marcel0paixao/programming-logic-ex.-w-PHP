<?php
    /* ====== programming logic exercises with PHP.toUppsercase() ======
        Getting by a random array, what's the most repeated number and for how many times it was repeated
    */
    //array filling and declaration
    $arr = [];
    for ($i=0; $i < 20; $i++) {
        $arr[$i] = rand(1,10);
    }

    //catch how many times which number repeated 
    $repetitions = array_count_values($arr);

    //check how many times this number was repeated and display on the screen 
    foreach ($repetitions as $key => $repetition) {
        if (isset($repetitions[$key]) && $repetitions[$key] == max($repetitions)) {
            return 'Most repeated number: ' . $key . ', repeated: ' . $repetition . ' times';
        }
    }
?>