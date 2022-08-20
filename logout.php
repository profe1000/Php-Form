<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<title>  Admin </title>
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

<div class="my-content" style="min-height:300px">

<div class="my-container" id="displaydefault">


<a> Logout </a>

<?php

setcookie("user", "", time() - 3600);
header("Location: login.html"); 

?>      

</div>

</div>

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
