<html>
    
<head>
<style type="text/css"media="screen">
header{position:fixed;background-color:green;width:100%;}
h{color:white;font-size:400%;}
body{background-color:#e8fe8c;}
.a{position:center}
.ba{padding-top:10%}
label{font-size:200%;font-style:'bold';color:white}
input{font-size:150%;background-color:#e8fe8c;}
form{text-align:center;background-color:green;width:100%;border-radius:10px;position:center;padding-bottom:3%}
</style>
</head>
<header><h><center>manideep library</center></h></header>
<body>
<div class='ba'></div>
<div class='a'>
<form method="POST" >
  <label for="fname">Name:</label><br>
  <input type="text" name="cname" id="name" minlength="1" maxlength="20" placeholder="Name(max-20 char)" required><br>
  <label for="lname">User Name:</label><br>
  <input type="text" name="uname" id="uname" minlength="1" maxlength="20" placeholder="UserName(max-20 char)" required><br>
  <label for="phno">Ph.No:</label><br>
  <input type="tel" name="phno" id="phno" pattern="[0-9]{10}" placeholder="10-digit number"required><br>
  <label for="pass">Password:</label><br>
  <input type="password" name="pass" id="pass" maxlength="6" minlength="6" placeholder="password length 6"required><br>
  <label for="rpass">Re-Enter Password:</label><br>
  <input type="password" name="rpass" id="rpass" maxlength="6" minlength="6"  placeholder="re-enter length 6 password" required><br>
  <br>
  <input style="font-size:200%;background-color:white;color:black;" type="submit" id="sub" name="sub" value="Register" onclick="
   var p=document.getElementById('pass').value; 
  var rp=document.getElementById('rpass').value; 
  if(p!=rp){alert('password mismatch')}
  "}>
</form> <center>
<input style="font-size:200%;background-color:white;color:black;" type="submit" id="sub1" name="sub1" value="sign-in page" onclick="window.location.href='signin.php';
  "}></center>
</div>

<script>

            <?php
                if($_POST['cname']!='' && $_POST['uname']!='' && $_POST['phno']!='' && $_POST['pass']!='' && $_POST['rpass'] == $_POST['pass']){
                $co=mysqli_connect('localhost','id13518568_manideep9949466287','Online>on9949','id13518568_rise');
                $cn=$_POST['cname'];
                $un=$_POST['uname'];
                $pas=$_POST['pass'];
                $rpas=$_POST['rpass'];
                $ph=$_POST['phno'];
                if($pas!=$rpas){echo "kkkk";}
                else{
                $a="insert into uuu(cname,fname,pass,phn)values('$cn','$un','$pas','$ph')";
                $run=mysqli_query($co,$a) or die(mysqli_error());
                echo"alert('Registred sucessfully');
                window.location.href='signin.php';";}
            }
            ?>


            
</script>

</body>

</html>