<?php
//Declarations
$title = "My page";
$some_content = 'Bla Bla Bla';
$name="PremSai";
//Initialization
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="UTF8">
    <style>
    </style>
</head>
<body>
  <header>
  <h1><?php echo $title ?> </h1>
  </header>
  <main>
    <div><?=$some_content ?> </div> 
    <div><?=$name ?> </div>
  </main>
</body>
</html>
