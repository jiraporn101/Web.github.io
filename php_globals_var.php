<!DOCTYPE html>
<html lang="th">
    <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=1024,initial-scale=1.0">
          <title> Document </title>
 </head>
<body>
       <h1>การใช้ $GLOBALS </h1>
       <?php
       $X = 75;
       $y = 25;

       function addition() : void {
        $x = 200; 
        $y = 500;

         $GLOBALS['z'] = $x + $y;
       }
  ?>
  <?php
  echo $_SERVER['PHP_SELF'];
  echo "<br>";

  echo $_SERVER['SERVER_NAME'];
  echo "<br>";

  echo $_SERVER['HTTP_HOST'];
  echo "<br>";

  echo $_SERVER['SCRIPT_NAME'];
  echo "<br>";
  ?>
</body>
</html>
