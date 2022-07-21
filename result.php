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
$fullname =$_GET["txtfullname"];
$phonenumber =$_GET["txtphone"];
$postalcode=$_GET["txtpostalcode"];
$address=$_GET["txtaddress"];
$city=$_GET["txtcity"];
$province=$_GET["txtprovince"];
$cardnumber=$_GET["txtcardnumber"];
$cardmonth=$_GET["txtcardmonth"];
$cardyear=$_GET["txtcardyear"];
$email=$_GET["txtemail"];
$password=$_GET["txtpassword"];
$confirmpassword=$_GET["txtconfirmpassword"];
$totalamount=0;
$tax=0;
$subtotal=$_GET["txtsubtotal"];
$itemnumber=$_GET["txtnumitems"];
$formresult="";


function checkrequireditem(){
    global $fullname,$phonenumber,$postalcode,$address,$city,$province,$cardnumber,$cardmonth,$cardyear,$email,$password,$confirmpassword,$formresult;

    $formresult ="";

    if ($fullname==""){
        echo  "<script> alert('Full Name is Required')</script>";
        $formresult="<p> Unable to process this form, Full Name is Required </p>";
        return;
    } 

    if ($phonenumber==""){
        echo  "<script> alert('Phone Number is Required')</script> ";
        $formresult="<p> Unable to process this form, Phone Number is Required </p>";
        return;
    } 

    if ($postalcode==""){
        echo  "<script> alert('Postal Code is Required')</script> ";
        $formresult="<p> Unable to process this form, Postal Code is Required </p>";
        return;
    } 

    if ($address==""){
        echo  "<script> alert('Address is Required')</script> ";
        $formresult="<p> Unable to process this form, Address is Required </p>";
        return;
    } 

    if ($city==""){
        echo  "<script> alert('City is Required')</script> ";
        $formresult="<p> Unable to process this form, City is Required </p>";
        return;
    } 

    if ($province==""){
        echo  "<script> alert('Province is Required')</script> ";
        $formresult="<p> Unable to process this form, Province is Required </p>";
        return;
    } 

    if ($cardnumber==""){
        echo  "<script> alert('Card Number is Required')</script> ";
        $formresult="<p> Unable to process this form, Card Number is Required </p>";
        return;
    } 

    if ($cardmonth==""){
        echo  "<script> alert('Month of Card is Required')</script> ";
        $formresult="<p> Unable to process this form,Month of Card is Required </p>";
        return;
    } 

    if ($cardyear==""){
        echo  "<script> alert('Year of card is Required')</script> ";
        $formresult="<p> Unable to process this form, Year of card is Required </p>";
        return;
    } 

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

    if ($confirmpassword==""){
        echo  "<script> alert('Password Confirmation  Required') </script> ";
        $formresult="<p> Unable to process this form, Password Confirmation  Required </p>";
        return;
    } 

    if ($password!=$confirmpassword){
        echo  "<script> alert('Password do not Match') </script> ";
        $formresult="<p> Password not Match </p>";
        return;
    }

    checkcarddetails();
 }

 function checkcarddetails(){
    global $cardnumber, $cardmonth, $cardyear,$formresult;

    $pattern = "/[0-9]{4}[-][0-9]{4}[-][0-9]{4}[-][0-9]{4}$/";

    if(!preg_match( $pattern , $cardnumber)){
        echo  "<script> alert('You Enter a wrong Card Details') </script> ";
        $formresult="<p> Unable to process this form, You Enter a wrong Card Details </p>";
        return;
    } 

    $pattern = "/[A-Z]{3}$/";

    if(!preg_match( $pattern , $cardmonth)){
        echo  "<script> alert('You Enter a wrong Card Month') </script> ";
        $formresult="<p> Unable to process this form, You Enter a wrong Card Month </p>";
        return;
    }
    
    $pattern = "/[0-9]{4}$/";

    if(!preg_match( $pattern , $cardyear)){
        echo  "<script> alert('You Enter a wrong Card Year') </script> ";
        $formresult="<p> Unable to process this form, You Enter a wrong Card Year </p>";
        return;
    } 

    checkemail(); 
 }

 function checkemail(){

    global $email, $formresult;
    $pattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";

    if(!preg_match( $pattern , $email,)){
        echo  "<script> alert('You Enter an Invalid Email') </script> ";
        $formresult="<p> Unable to process this form, You Enter an Invalid Email </p>";
        return;
    } 


    
    checkamount();
 }

 function checkamount(){
   global $subtotal,$formresult;

   if($subtotal < 10){
    echo  "<script> alert('The Total Amount of items is less than $10.00')</script> ";
    $formresult="<p> Unable to process this form, The Total Amount of items is less than $10.00 </p>";
    return;
   }

   checknumofitems();

 }


 function checknumofitems(){
    
    global $itemnumber,$formresult;

   if($itemnumber < 2){
    echo  "<script> alert('The Total Number of Items is less than 2')</script> ";
    $formresult="<p> Unable to process this form, The Total Number of Items is less than 2 </p>";
    return;
   }

   checktax();
}



function checktax(){
    global $tax,$province,$totalamount,$subtotal;

    if (strtoupper($province)==strtoupper("Alberta")){
        $tax=0.05;
    } elseif (strtoupper($province)==strtoupper("British Columbia")){
        $tax=0.12;
    }elseif (strtoupper($province)==strtoupper("Manitoba")){
        $tax=0.12;
    }elseif (strtoupper($province)==strtoupper("New Brunswick")){
        $tax=0.15;
    }elseif (strtoupper($province)==strtoupper("Newfoundland")){
        $tax=0.15;
    }elseif (strtoupper($province)==strtoupper("Northwest territories")){
        $tax=0.05;
    }elseif (strtoupper($province)==strtoupper("Prince Edward island")){
        $tax=0.15;
    }elseif (strtoupper($province)==strtoupper("Quebec")){
        $tax=0.149;
    }elseif (strtoupper($province)==strtoupper("Saskatchewan")){
        $tax=0.11;
    }elseif (strtoupper($province)==strtoupper("Yukon")){
        $tax=0.05;
    }else
    {
        $tax=0.13;
    }

    $totalamount = $tax + $subtotal;

    completed();

}

function completed() {
    global $fullname,$phonenumber,$postalcode,$address,$city,$province,$cardnumber,$cardmonth,$cardyear,$email,$password,$confirmpassword,$formresult, $subtotal, $itemnumber,$totalamount,$tax;
    
    $formresult="";;

    $formresult="<br />";
    $formresult="<h2> Receipt for Your Purchase </h2>";
    $formresult.="  Sub Total: $".$subtotal."  <br />";
    $formresult.="  Tax: $".$tax." <br />";
    $formresult.="  Total Amount: $".$totalamount."   <br />";

    $formresult.="  <h4> Customer Details </h4>";
    $formresult.="  Fullname : ".$fullname." <br />";
    $formresult.="  Phone Number :".$phonenumber."  <br /><br />";
    
    $formresult.="  Postal Code :".$postalcode."  <br />";
    $formresult.="  Address :".$address."  <br />";
    $formresult.="  City :".$city."  <br />";
    $formresult.="  Province :".$province."  <br /> <br /><br />";
}


checkrequireditem();

?>

<?php echo  $formresult; ?>


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
