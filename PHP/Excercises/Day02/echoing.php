<?php
 echo 'Hello', PHP_EOL;
 echo "SPR", PHP_EOL;
 $str = "ISI";
 echo $str, PHP_EOL;
 echo 'Content of variable is: ', $str, PHP_EOL;
 $str2 = $str . 'How are you?';
 echo $str2, PHP_EOL;
 $firstname = 'SAI PRASAD';
 $sentence ="My name is firstname, and I like PHP";
 echo $sentence, PHP_EOL;
$t=array(1,2,3);//array decleration
echo "Second value is {$t[1]}", PHP_EOL;

define('AGE',23);//Integer constant
echo AGE,PHP_EOL;
define('COMPANY','ISI');//String Constant
echo COMPANY,PHP_EOL;
define('TWICE_AGE', AGE * 2);
echo TWICE_AGE,PHP_EOL;
define('FULL_COMPANY_NAME',COMPANY . ' Inc ');//Concatenation
echo TWICE_AGE, ' ',FULL_COMPANY_NAME;//Use it

const AGE2 = 23;//No need of brackets()
echo AGE2,PHP_EOL;
const COMPANY2 = 'ISISI';
echo COMPANY2;

if(isset($str))
{
    echo PHP_EOL, 'Variable $str exists';//isset for variables
}
else
{
    echo PHP_EOL, 'Variable $str does not exist';
}
if(defined(COMPANY))
{
    echo PHP_EOL, 'Constant COMPANY exists';//defined for constants
}
else
{
    echo PHP_EOL, 'Constant COMPANY does not exist';
}