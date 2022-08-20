<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<title> Shop - Printing Shop </title>
<link rel="stylesheet" href="css/shop.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="images/logo.png">
<style>

</style>
</head>
<body>

<div class="my-card my-blue" style="height:80px">

<div class="my-col l6 s6 m6">
    <img alt="logo" src="images/logo.png" style="height:40px; margin-top:10px; margin-left:10px" />
    <b class="my-large">My Online Shop</b>
</div>

<div class="my-col l6 s6 m6 my-right-align my-padding">

    <a  class="my-large my-padding"> Home </a> &nbsp; &nbsp;

</div>

</div>

<div class="w3-content">


<br /><br /><br />


<?php
$email=$_POST["txtemail"];
$password=$_POST["txtpassword"];


function checkrequireditem(){
    global $email,$password,$formresult;

    $formresult ="";

    if ($email==""){
        echo  "<script> alert('Your Email is Required')</script> ";
        $formresult="<p> Unable to process this form, Email is Required </p>";
        return;
    } 

    if ($password==""){
        echo  "<script> alert('Password is Required')</script> ";
        $formresult="<p> Unable to process this form, Password is Required </p>";
        return;
    } 


    completed();
 }


 function completed() {
    global $email,$password,$formresult;
    
    $formresult="Checking Database for Records";

    $servername = "localhost";
    $username = "root";
    $pwd = "";
    $dbname = "schoolrecords";
    
    // Create connection
    $conn = new mysqli($servername, $username, $pwd, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    //echo "SELECT * FROM admin where 	email= '" . $email . "' and pwd= '" .$password. "'";

    $sql = "SELECT * FROM admin where 	email= '" . $email . "' and pwd= '" .$password. "'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "You have login with id: " . $row["ID"];

        $cookie_name = "user";
        $cookie_value = $row["ID"];
         setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
         header("Location: dashboardhome.php"); 
      }
    } else {
      echo "Invalid User name and Password";
    }
    $conn->close();

    }


checkrequireditem();

?>

<br />
<a class="my-btn my-blue my-round" href="login.html"> Back to Login </a>

<br /><br /><br /><br /><br /><br /><br /><br />

<div class="my-card my-blue my-container" style="min-height:200px; padding-top:50px;">

<div class="my-content">
    

<div class="my-col l3 s6 m3" style="padding:5px">

<a>Log In to Your Dashboard</a> <br /><br />

<a>Sign Up for an account</a> <br /><br />

<a>About Us</a> <br /><br />

</div>

<div class="my-col l3 s6 m3" style="padding:5px">

<a>Contact Us</a> <br /><br />

<a>FAQ & Technical Support</a> <br /><br />

<a>Careers</a> <br /><br />

</div>

<div class="my-col l3 s6 m3" style="padding:5px">

<a>Terms of Use</a> <br /><br />

<a>Privacy Agreement</a> <br /><br />

</div>

<div class="my-col l3 s6 m3" style="padding:5px">

<a>© 2022 My printing Service, Inc.</a> <br /><br />

<a>Canada</a> <br /><br />

</div>


</div>

</div>


</body>
</html>
