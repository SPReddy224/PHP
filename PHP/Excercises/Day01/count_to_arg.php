<?php
$max=10;
if($argc>1)
{
	$max=$argv[1];
}
for($argc=1;$argc<=$max;$argc++)
{
	echo $argc;
}