<html>
    
<head>
<style type="text/css"media="screen">
header{position:fixed;background-color:green;width:100%;}
h{color:white;font-size:600%;}
body{background-color:#e8fe8c;}
.a{position:center}
.ba{padding-top:25%}
i{border-radius:50%;background-color:#e8fe8c;color:green;padding:10px}
label{font-size:350%;font-style:'bold';color:white;padding-left:0%}
label1{font-size:400%;font-style:'bold';color:white;background-color:green;}
input{font-size:300%;background-color:#e8fe8c;}
textarea{font-size:300%;background-color:#e8fe8c;width:70%;height:20%}
form{background-color:green;width:100%;border-radius:10px;position:center;padding:3% 0%;padding-left:15%}
</style>
<script src="https://kit.fontawesome.com/91f053e0fb.js" crossorigin="anonymous"></script>
</head>
<header><h><center>manideep</center></h></header>
<body>
<div class='ba'><label1>Upload Item</label1></div>
<div class='a'>
    
<form method="POST" action="" enctype="multipart/form-data">
   <label for="lname"><i class="fas fa-tags"></i>Product Name:</label><br></br>
  <input type="text" name="pname" id="pname" placeholder="product name (max 20char)" maxlength="20" required><br></br>
  <label for="lname"><i class="fas fa-cubes"></i>Category:</label><br></br>
  <input type="text" name="cat" id="cat"placeholder="product category (max 20char)" maxlength="20"required><br></br>
  <label for="fname"><i class="fas fa-balance-scale"></i>Quantity:</label><br></br>
  <input type="number" name="qun" id="qun" placeholder="product quantity (max 10char)"maxlength="10"required><br></br>
  <label for="fname"><i class="fas fa-rupee-sign"></i>Cost</label><br></br>
  <input type="number" name="cost" id="cost"  placeholder="product cost (max 10char)"maxlength="10"required><br></br>
  <label for="fname"><i class="fas fa-book"></i>Description:</label><br></br>
  <textarea name="des" id='des' rows="7" cols="15" placeholder="detailed description of product (max 105char)"maxlength="105" required></textarea><br><br>
  <input style="background-color:white;color:black;width:80%"type="file" id="myf" name="myf" required>
  
  <br>
  <br>
  <input style="font-size:400%;background-color:white;color:black;margin-left:25%" type="submit" name="upload" value="Upload" onclick="b()">
  <input style="font-size:400%;background-color:white;color:green;margin-left:25%" type="submit" name="upload" value="Back" onclick="c()">
</form> 
</div>
<script>
function c(){window.location = 'https://meshuga-bullets.000webhostapp.com/index.php';}
    function b(){

     <?php
            if (isset($_POST['upload'])){
                 $msg='';
                 $pid='ok'.rand(10000,99999);
                 $filename =$pid.$_FILES["myf"]["name"];
                 $tempname = $_FILES["myf"]["tmp_name"];    
                 $folder = "uploads/".$filename;
                 if (move_uploaded_file($tempname, $folder))  {
                     $msg = "Image uploaded successfully";
                  }else{
                     $msg = "Failed to upload image";
      }
               $co=mysqli_connect('localhost','id13518568_manideep9949466287','Online>on9949','id13518568_rise');
                $pn=$_POST['pname'];
                $cat=$_POST['cat'];
                $cost=$_POST['cost'];
                $qun=$_POST['qun'];
                $des=$_POST['des'];
                $myf=$filename;
                $a="insert into xxx(pn,cat,qun,cost,des,myf,pid)values('$pn','$cat','$qun','$cost','$des','$myf','$pid')";
                $run=mysqli_query($co,$a) or die(mysqli_error());
            
            
  }
            
            ?>   
    }
</script>

</body>

</html>