<!DOCTYPE html> 
<html lang="en"> 
<head> 
<h1>การใช้ PHP $_GET</h1> 

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>"> 

Name : <input type="text" name="fname"> <br> 
Last Name: <input type="text" name="lname"><br> 
<input type="submit" value="submit"> 
</form> 

<?php 
if ($_SERVER["REQUEST_METHOD"] == "GET"){ 
    if (isset($_GET['fname'])) 
        $name = $_GET['fname'];
    $lname = $_GET['lname']; 
    if (empty($name)) { 
        echo "Name is empty"; 
    } else { 
        echo $name." ".$lname; 
    } 
} 
?> 

</head>
</html>
