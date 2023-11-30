<?php
$server="localhost";
$username= "root";
$password= "";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to database failed". 
    mysqli_connect_error());
}
$txtarea=$_POST['txtarea'];
$sql= "INSERT INTO `form`.`txt` (`txtarea`) VALUES ('$txtarea');":
echo "$sql";
if ($con->query($sql)==true){
    echo "<H1>succesfully inserted<H1>";
}
else{
    echo "error:";
}
$con->close();
?>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
<form action="lddlldl.php" method="post" >
    <input type="username" >
    <p><label for="txtarea"></label></p>
<textarea name="txtarea" id="txtarea" value="" row="10" col="20"> 
    Fill your permanent adress</textarea><br>
    <input type="submit" value="submit"/>    <input type="reset" value="reset"/>
</textarea>
</form>     
    </body>
</html>