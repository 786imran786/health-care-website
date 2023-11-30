<?php
$server="localhost";
$username= "root";
$password= "";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to database failed". 
    mysqli_connect_error());
}
$username=$_POST['username'];
$password=$_POST['password'];
$phonenumber=$_POST['phonenumber'];
$pincode=$_POST['pincode'];
$sql= "INSERT INTO `healthcare`.`userdata` (`username`, `password`, `phonenumber`, `pincode`) VALUES ('$username', '$password', '$phonenumber', '$pincode');";
echo "$sql";
if ($con->query($sql)==true){
    echo "<H1>succesfully inserted<H1>";
}
else{
    echo "error:";
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health+Care - Login</title>
    <style>
        ul {
            display: flex;
            margin-left: 20px;
        }
        li {
            list-style-type: none;
            font-family: 'Roboto',sans-serif;
            font-weight: bolder;
            font-size: 15px;
            margin-top: 30px;
        }
        #listitem {
            margin-left: 3rem;
        }
        header {
            display: flex;
        }
        .logo img {
            margin-top: 24px;
            margin-left: 24px;
            width: 12rem;
        }
        .button-container {
            position: fixed;
            right: 10px;
        }
        button {
            
            margin-right: 25px;
            margin-top: 2rem;
            height: 40px;
            width: 120px;
            border-radius: 5px;
            font-family: 'Roboto',sans-serif;
            background-color: white;
            border: solid black 1px;
        }
        .footer-container {
            display: flex;
        }
        .practo {
            text-align: left;
            margin-left: 100px;
        }
        .forpatients {
            text-align: left;
            margin-left: 250px;
        }
        .fordoctors {
            text-align: left;
            float: right;
            margin-left: 300px;
        }
        .forhospitals {
            text-align: left;
            margin-left: 250px;
        }
        footer {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .footer {
            background-color: rgb(112, 146, 190);
            color: #fff;
            padding: 50px 0;
            text-align: center;
        }
        footer h5 {
            font-family: 'Dancing Script';
            text-shadow: 0px 5px 15px black;
        }
        .login {
            color:white;
            border: 1px solid #14bef0;
            width: 100%;
            height: 45px;
            font-family: 'Lato';
            font-size: 14px;
            text-align: center;
            vertical-align: middle;
            box-sizing: border-box;
            border-radius: 3px;
            line-height: 24px;
        background:#13bef0	
        }
        #x{
            color: #14bef0;
            font-weight: bold;
            font-size:30px;
        }
        a{text-decoration: none;}
    </style>
</head>
<body>
    <header>
        <div class="logo"><a href="home.html"><img src="logo.png" alt="logo"></a></div>
        <nav>
            <ul>
                <li id="listitem">Find Doctors</li>
                <li id="listitem">Video Consult</li>
                <li id="listitem">Medicine</li>
                <li id="listitem">Lab Tests</li>
                <li id="listitem">History</li>
            </ul>
        </nav>
        <div class="button-container">
            <a href="login.html"><button id="login-button">Login / Sign-Up</button></a>
        </div>
    </header>
    <hr>
    <main>
        <center><a href="login.html" id="x">Login</a>&nbsp&nbsp&nbsp<a href="register.html" id="x">Register</a><hr>
        </center>
            <img src="download-removebg-preview.png" style="margin-top:100px; margin-left:360px; height:320px; width:320px;">   
        <div style="float:right;border:3px solid grey;padding:100px;margin:90px;padding-top:40px;padding-bottom:40px;padding-right:50px;padding-left:50px">
        
        <h1>Join Health+Care</h1><hr>
        <form id="qwerty" action="h1.php" method="post">
        <label style=" color: #787887;">Full Name:</label><br>
        <input name="username" type="text" id="username" placeholder="Name"></input><br><br>
        <label  style="color: #787887;">Password:</label><br>
        <input name="password" type="password" minlength="8" id="password"style="width: 160px;"placeholder="password"></input><br><br>
        <label  style="color: #787887;">Phone-Number:</label><br>
        
        <input name="phonenumber" type="text" minlength="10" id="number"style="width: 160px;" placeholder="Number"></input><br><br>
        <label  style="color: #787887;">Pin-code:</label><br>
        <input name="pincode" type="text" minlength="6" id="number"style="width: 160px;" placeholder="pin"></input><br><br>
        <input type="checkbox" id="remember"></input
        <label style="color:#787887; font-size:3px">recieve relevant notification</label><br>
        <center><button type="submit">LOGIN</button></center><br>
        <center><a href="www">forgot password?</a></center>
        </form>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </main>
    <footer class="footer">
        <div class="footer-container">
            <div class="practo">
                <h5>Health+Care</h5>
                <a>About</a><br>
                <a>Blog</a><br>
                <a>Careers</a><br>
                <a>Press</a><br>
                <a>Contact us</a><br>    
            </div>
            <div class="forpatients">
                <h5> For Patients</h5>
                <a>Search for doctors</a></br>
                <a>Search for clinics</a></br>
                <a>Search for hospitals</a></br>
                <a>Book Diagnostic Tests</a></br>
                <a>Book Full Body Checkups</a></br>    
            </div>
            <div class="fordoctors">
                <h5> For Doctors</h5>
                <a>Health+Care Profile</a></br>
                <h5>For Clinics</h5>
                <a>Ray by Health+Care</a></br>
                <a>Health+Care Reach</a></br>
                <a>Ray Tab</a></br>
                <a>Health+Care Pro</a></br>
            </div>
            <div class="forhospitals">
                <h5> For Hospitals</h5>
                <a>Insta</a></br>
                <a>Quora</a></br>
                <a>Profile</a></br>
                <a>Reach</a></br>
                <a>Drive</a></br>
            </div>
        </div>
    </footer>
    <script src="h1.js"></script>
</body>
</html>