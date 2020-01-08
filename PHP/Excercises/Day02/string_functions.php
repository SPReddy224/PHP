<?php
const str= '.....Belle marquise , vos beaux yeux , d\'amour , me font mourir !-----';
$url = 'http://www.isi-mtl.com/home.php';
echo 'String is',stripslashes(str),PHP_EOL;
echo 'Length of string:', strlen(str),PHP_EOL;
echo "First char:",str[0],PHP_EOL;
echo "9th char:",str[8],PHP_EOL;
echo "Last char:",str[strlen(str)-1],PHP_EOL;
echo "Replacement1",str_replace(', ' , '-' , str),PHP_EOL;
echo "Replacement2",str_replace('- ' , ',' , str),PHP_EOL;
echo str_replace("marquise","duchesse",str),PHP_EOL;
echo str_replace("Marquise","duchesse",str),PHP_EOL;
echo "Trim:",trim(str,"....."),PHP_EOL;
echo "Right Trim:",trim(str,"-----"),PHP_EOL;
echo "Left Trim:",trim(str,"....."),PHP_EOL;
echo "Get the type",gettype(str),PHP_EOL;
echo "URL is:",$url;
echo "Position of subtring com is:",strpos($url,"com"),PHP_EOL;
echo "Position of subtring org is:",$bool=strpos($url,"org"),PHP_EOL;
echo "Type of it is:",gettype($bool),PHP_EOL;
if (false !== strpos($url, 'com')) 
{
    echo"Substring org is present in the url.",PHP_EOL;
}
else
{
        echo "Substring org is absent in the url.",PHP_EOL;
}
echo"14 characters at the position 5 is:",substr(str,5,14),PHP_EOL;
echo"To lower case",strtolower(str),PHP_EOL;
echo"To lower case",strtoupper(str),PHP_EOL;
echo "Capitalize:",ucfirst($url),PHP_EOL;
echo"Thank you !";
