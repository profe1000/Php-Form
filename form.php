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

<div class="my-content" style="min-height:300px">

<div class="my-container" id="displaydefault">

             <form name="form1" action="result.php" method="get">

            <h2> User Information </h2>

            <label> Fullname </label>

            <input  id="txtfullname" name="txtfullname" class="my-input my-border my-round"  type="text"  /> <br />

            <label> Phone Number </label>

            <input  id="txtphone" name="txtphone" class="my-input my-border my-round"  type="number"  />  <br />

            <label> Postal Code </label>

            <input id="txtpostalcode" name="txtpostalcode" class="my-input my-border my-round"  type="text"  />  <br />


            <label> Address </label>

            <input id="txtaddress" name="txtaddress" class="my-input my-border my-round"  type="text"  /> <br />


            <label> City </label>

            <input id="txtcity" name="txtcity" class="my-input my-border my-round"   type="text" /> <br />


            <label> Province </label>
 
            <input id="txtprovince" name="txtprovince"  class="my-input my-border my-round"  type="text"  /> <br />


            <h2> Credit Card Details </h2>

            <label>  Card Number </label>

            <input id="txtcardnumber" name="txtcardnumber"  class="my-input my-border my-round"  type="text"  /> <br />

            <label>  Card Month </label>

            <input id="txtcardmonth"  name="txtcardmonth" class="my-input my-border my-round"  type="text"  /> <br />

            <label>  Card Year </label>

            <input id="txtcardyear"   name="txtcardyear" class="my-input my-border my-round" type="number"  /> <br />

           
            <label>  Email Address </label>
 
            <input id="txtemail" name="txtemail" class="my-input my-border my-round"  type="email"  /> <br />

            <label>  Password </label>

            <input id="txtpassword" name="txtpassword" class="my-input my-border my-round"  type="password"  /> <br />

            <label>  Confirm Password </label>

            <input id="txtconfirmpassword" name="txtconfirmpassword" class="my-input my-border my-round"  type="password"  /> <br />
             
            <br />

            <label style="display:none"> Sub Total </label>

            <input style="display:none"  id="txtsubtotal" name="txtsubtotal" class="my-input my-border my-round"  type="text" value="100"  /> <br />

            <label style="display:none">  Number Of Items </label>

            <input style="display:none"  id="txtnumitems" name="txtnumitems" class="my-input my-border my-round"  type="text" value="2"  /> <br />

            <input type ="submit"  class="my-btn my-blue my-round" Value="Check Out" />

            <br />  <br />

             </form>

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

<script>

function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
 }


 document.getElementById("txtnumitems").value=getParameterByName('itemnum');

 document.getElementById("txtsubtotal").value=getParameterByName('itemprice');


</script>


</body>
</html>
