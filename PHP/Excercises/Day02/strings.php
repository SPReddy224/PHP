<?php
    $firstname = 'Sai';
    echo 'Length is', strlen($firstname),PHP_EOL;
    echo 'Position of the first "i" is :',strpos('$firstname','i'),PHP_EOL;
    echo 'Char at position 2 is :', $firstname[2],PHP_EOL;


    
    $values_str = '1 45 23 78';
    $value_array = explode(' ', $values_str);
    echo PHP_EOL;
    print_r($value_array);//This is an array
    echo PHP_EOL,$value_array[0],$value_array[1];
