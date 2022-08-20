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

<div>


<?php

$teamname=$_GET["txtteamname"];
$collegename =$_GET["ttxtcollegename"];
$collegeaddress=$_GET["txtcollegeaddress"];
$collegecity=$_GET["txtcollegecity"];
$collegeprovince=$_GET["txtcollegeprovince"];
$studentone=$_GET["txtstudentone"];
$studenttwo=$_GET["txtstudemttwo"];
$studentemailone=$_GET["txttxtstudentemailone"];
$studentemailtwo=$_GET["txtstudentemailtwo"];
$formresult="";


function checkrequireditem(){
    global $teamname,$collegename,$collegeaddress,$collegecity,$collegeprovince,$studentone,$studenttwo,$studentemailone,$studentemailtwo;

    $formresult ="";

    if ($teamname=""){
        echo  "<script> alert('You must Enter a Team Name')</script>";
        $formresult="<p> Unable to process this form, Team Name is Required </p>";
        return;
    } 

    if ($collegename==""){
        echo  "<script> alert('College is Required')</script> ";
        $formresult="<p> Unable to process this form, College is Required </p>";
        return;
    } 

    if ($collegeaddress==""){
        echo  "<script> alert('College Address is Required')</script> ";
        $formresult="<p> Unable to process this form, College Address is Required </p>";
        return;
    } 

    if ($collegecity==""){
        echo  "<script> alert('College City  is Required')</script> ";
        $formresult="<p> Unable to process this form, College City is Required </p>";
        return;
    } 

    if ($collegeprovince==""){
        echo  "<script> alert('College Province is Required')</script> ";
        $formresult="<p> Unable to process this form, College Province is Required </p>";
        return;
    } 

    completed();

 }

function completed() {
    global $teamname,$collegename,$collegeaddress,$collegecity,$collegeprovince,$studentone,$studenttwo,$studentemailone,$studentemailtwo;
    $formresult="";

    $servername = "localhost";
    $username = "root";
    $pwd = "";
    $dbname = "schoolrecords";
    
    // Create connection
    $conn = new mysqli($servername, $username, $pwd, $dbname);;
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO registration (Team_Name, College_Name, College_Address,College_City,College_Province,Student_name1,Student_name2,Student_email1,Student_email2)
    VALUES ('".$teamname."', '".$collegename."', '".$collegeaddress."','".$collegecity."', '".$collegeprovince."', '".$studentone."','".$studenttwo."', '".$studentemailone."', '".$studentemailtwo."')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo  "<script> alert('Your Record has being added')</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
}


checkrequireditem();

?>



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
