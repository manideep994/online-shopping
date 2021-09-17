<html>
    
<head>
<style type="text/css"media="screen">
header{position:fixed;background-color:green;width:100%;}
h{color:white;font-size:400%;}
body{background-color:#e8fe8c;}
.a{position:center}
.ba{padding-top:15%}
label{font-size:200%;font-style:'bold';color:white}
input{font-size:150%;background-color:#e8fe8c;}
form{text-align:center;background-color:green;width:100%;border-radius:10px;position:center;padding-bottom:3%}
</style>
</head>
<header><h><center>manideep</center></h></header>
<body>
<div class='ba'></div>
<div class='a'>
<form  method="POST" >
  <label for="uname">User Name:</label><br>
  <input type="text" name="uname" id="uname"  maxlength="20" placeholder="UserName(max-20 char)" required><br>
  <label for="pass">Password:</label><br>
  <input type="password" name="pass" id="pass"  minlength="6" maxlength="6" placeholder="password length 6"required><br>
  <br>
  <input style="font-size:200%;background-color:white;color:black;" type="submit" id="Sign-In"name="Sign-In" value="Sign-In"  >
</form> 
    <center><label style="font-size:150%;font-style:'bold';color:red" >if not registered</label><br>
    <input style="width:7%;font-size:150%;background-color:white;color:green;" type="submit" name="reg" value="Register" onclick="window.location.href='signup.php';" " >
    </center>
</div>

<script>
function c(){
window.location.href='index.php';
alert('Login Successful');}

<?php

if(isset($_POST['Sign-In'])){
    $un = $_POST['uname'];
    $pas = $_POST['pass'];
    $con=mysqli_connect('localhost','id13518568_manideep9949466287','Online>on9949','id13518568_rise');
    if (!$con) {
        die("Database connection failed" . mysqli_connect_error());
    }
    $query = "SELECT * FROM uuu WHERE fname = '$un' and pass = '$pas'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    if($count ==1 ){
        echo ("
        c();
        ");
    }else{
        echo ("
                alert('incorrect username or password');
                        ");
    }
}
?>

</script>

</body>

</html>