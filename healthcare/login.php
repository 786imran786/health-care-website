<?php
    $number=$_POST['phonenumber'];
    $password=$_POST['password'];
$server="localhost";
$username= "root";
$password= "";
$con=mysqli_connect($server,$username,$password);
if(!$con) {
    die("connection to database failed". 
    mysqli_connect_error());
}
    else{
        $stmt=$con->prepare("SELECT * FROM userdata username=? );
        $stmt->execute();
        $stmt_result= $stmt->get_result();
        if ($stmt_result->num_rows> 0){
            $data=$stmt_result->fetch_assoc();
            if($data["password"]== "$password"){
                echo "login succesfuly";
              }
              else{
                echo"<h2>invalid<h2>";
            }}}
            
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
            font-family: 'Roboto';
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
        a:link {color: lightblue;}
        a:visited {color: #060235}
        a:hover {color: #FCFC0C}
        a:active {color: #C0F0FC}
    </style>
</head>
<body>
    <header>
        <div class="logo"><a href="home.html"><img src="logo.png"alt="logo"></a></div>
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
        <center><a href="login.html" id="x">Login</a>&nbsp / &nbsp&nbsp<a href="register.html" id="x">Register</a><hr>
        </center>
        <img src="download-removebg-preview.png" style="margin-top:100px; margin-left:360px; height:320px; width:320px;">
        <div style="float:right;border:1px solid grey;padding:100px;margin:90px;padding-top:40px;">
        
        <center><h1>Login</h1></center><hr>
        <form id="qwerty" action="login.php" method="post">
        <label style=" color: #787887;">UserId/Mob No.:</label><br>
        <input type="text" minlength="8"id="username" name="phonenumber"></input><br><br>
        <label  style="color: #787887;">Password:</label><br>
        <input name="password" type="password"  id="password"style="width: 160px;"></input><br><br>
        <input type="checkbox" id="remember"></input
        <label style="color:#787887;">remember me</label><br>
        <center><button type="submit">LOGIN</button></center><br>
        <center><a href="www">forgot password?</a></center>
        
        </form>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
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
</body>
</html>