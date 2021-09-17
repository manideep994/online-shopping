
<html>
    
<head>
<style type="text/css"media="screen">
header{background-color:green;width:100%;color:white;padding-top:2%;overflow:hidden;
    
}
h{font-size:600%;padding-right:25%;float:right}
body{background-color:white;width:100%}
.ba{padding-top:25%}

.display{padding:0;
  margin: 0;
  width:100%;
  height:120em;
}


i{color:white;background-color:green;border-radius:50px;padding:10px;font-size:1em}
ii{color:green;width:100%;font-size:0.5em}



.show {display:block;}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: green;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 25px 8px 8px 32px;
  text-decoration: none;
  font-size: 3em;
  color: white;
  display: block;
  transition: 0.3s;
}
.sidenav aa {
  padding: 25px 8px 8px 32px;
  text-decoration: none;
  font-size: 3em;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
    margin:25px;
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 7em;
  background-color:#e8fe8c;
  border-radius:50px;
  margin-left: 50px;
}
.search{
  float: left;
  width:65%;
  padding-left:10%;
  margin-top: 8px;
  margin-right: 16px;
  background: green;

  border: none;
  cursor: pointer;
}
.search input{font-size:2.2em;height:80}
.dropdown{

padding-right:7%;
  position: relative;
  display: inline-block;
}.coll {
    margin:1% 5% 0% 0%;
  background-color: #e8fe8c;
  color: green;
  
  cursor: pointer;
  padding: 15px;
  float:right;
  border: 2px solid white;
  border-radius:50px;
  outline: none;
  font-size: 3em;
}
.collapsible{
    margin:1% 1% 0% 0%;
  background-color: #e8fe8c;
  color: green;
  cursor: pointer;
  padding: 15px;
  float:right;
  border: 2px solid white;
  border-radius:50px;
  outline: none;
  font-size: 3em;
}

.active{
  background-color: green;
  color: #e8fe8c;
}

.content {
  padding:0;
  display: none;
  overflow: hidden;
  background-color: white;
  width:98%;float:right;
  border:5px solid green;
}.content input{color: black;
  background-color: #e8fe8c;
  }
  .content0 {
  margin-top:14.5%;
  display: none;
  right:4%;
  overflow: hidden;
  background-color: white;
  width:40%;float:right;
  border-radius:50px;
}.content0 input{color: black;
  background-color: #e8fe8c;
  width:90%;
  }
.nn{color: black;
  
  font-size:3em;
  margin:0.5%;
  margin-bottom:0.1%;
  width:45%;
  text-align:center;
  float:right;
  padding: 12px 16px;
  text-decoration: none;
  display: block;}
  .nn1{color: black;
  font-size:2.2em;
  margin:0.5%;
   margin-bottom:0.2%;
  width:92%;
  text-align:center;
  float:right;
  padding: 12px 16px 5px 16px;
  text-decoration: none;
  display: block;}





.content1 {
  padding: 0 18px;
  display: none;
  width:38%;
  
  border:5px solid green;
  border-radius:10%;
  overflow: hidden;
  background-color: #e8fe8c;
}
</style>
<script src="https://kit.fontawesome.com/91f053e0fb.js" crossorigin="anonymous"></script>
</head>
<header>
   <div id="mySidenav" class="sidenav">
  <aaa href="javascript:void(0)" class="closebtn" onclick="closeNav()"><iii style="color:green;border-radius:50px;border:5px solid #e8fe8c"class="far fa-times-circle fa-spin"></iii></aaa>
  <a></a> <aa></aa> <aa></aa><aa></aa>
  <a href="https://meshuga-bullets.000webhostapp.com/pupdate.php">Upload</a>
  <a href="https://meshuga-bullets.000webhostapp.com/user.php">spectate</a>
  <a href="#">Social</a>
</div><span style="font-size:4em;cursor:pointer;background-color:white;margin-top:9%;padding:0% 3%;border-radius:50px;color:green" onclick="openNav()">
    <iii style="color:green" class="fas fa-list-alt"></iii>
</span>


</div>
   <h>$tyled-.in </h>
   <div class='search'>
   <form metod="GET">
  <iii><input type="search" id="gsearch" name="gsearch"></iii>
  <input type="submit" value="search" name="search"></input>
</form></div>


<button type="button" class="coll"><iii id='spin1' class="fas fa-clipboard-list"></iii></button>
<div class='content0'>
<?php
$co1=mysqli_connect('localhost','id13518568_manideep9949466287','Online>on9949','id13518568_rise');
    $a1="select * from xxx";
    $cat = array("0.#.@");
    $cn=0;
                $run1=mysqli_query($co1,$a1) or die(mysqli_error());
                while($items1=mysqli_fetch_array($run1)){
                if (in_array($items1['cat'], $cat))
  {
  }
else
  {
  $cat[$cn]=$items1['cat'];
  $cn=$cn+1;
  }      
                }
   foreach($cat as $value){
       echo"<form method='POST'><div class='nn1'><input style='padding:5px;border-radius:30px;font-size:1em;background-color:green;color:white'
       name='cat' id='cat'type='submit' value='$value'></div></form>";
       
   }
?></div>
<button type="button" class="collapsible"><iii id='spin' class="fa fa-filter"></iii></button>
<div class="content">
    <form method='POST'>
  <div class='nn'><i class="fas fa-sort-numeric-down"></i><input style='padding:8px;border-radius:30px;font-size:1em;background-color:green;color:white' name='new' id='new'type="submit" value="Newest on top"></div>
  <div class='nn'><i class="fas fa-sort-numeric-down"></i><input style='padding:8px;border-radius:30px;font-size:1em;background-color:green;color:white'name='old' id='old'type="submit" value="Oldest on top"></div>
  <div class='nn'><i class="fas fa-sort-numeric-down"></i><input style='padding:8px;border-radius:30px;font-size:1em;background-color:green;color:white'name='low' id='low'type="submit" value="price low-high"></div>
  <div class='nn'><i class="fas fa-sort-numeric-down"></i><input style='padding:8px;border-radius:30px;font-size:1em;background-color:green;color:white'name='high' id='high'type="submit" value="price high-low"></div>
</form> 
</div>
   </header>
<body>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
      document.getElementById('spin').className = "fa fa-filter";
    } else {
      content.style.display = "block";
      document.getElementById('spin').className = "fa fa-filter fa-spin";
    }
  });
}
</script>

   <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

</script>
<div class='display'>
    
<?php 

$co=mysqli_connect('localhost','id13518568_manideep9949466287','Online>on9949','id13518568_rise');
                $a1="select * from xxx";
                $run1=mysqli_query($co,$a1) or die(mysqli_error());
                while($items1=mysqli_fetch_array($run1)){
                    $rows1[] = $items1;
                }
                if (empty($rows1)) {
                    echo"<div class='ba'></div><div class='ba'></div><center><span style='font-size:15em;cursor:pointer;background-color:white;padding:0% 3%;border-radius:50px;color:green' onclick='openNav()'>
    <iii style='color:green' class='fas fa-cloud-upload-alt'></br><a style='font-size:0.3em'>upload</a></iii>
</span><center>";
                }
                else{
                $c=0;
                
                if (isset($_POST['new'])) {
                    if (isset($_POST['cat'])) {
                    $bbbb=$_POST['cat'];
                    $a="select * from xxx WHERE cat ='$bbbb'";
                }else{$a="select * from xxx";}
                    
                $run=mysqli_query($co,$a) or die(mysqli_error());while($items=mysqli_fetch_array($run)){
                    $rows[] = $items;
                }$rows = array_reverse($rows ,true);}
                
                elseif(isset($_POST['old'])) {
                    if (isset($_POST['cat'])) {
                    $bbbb=$_POST['cat'];
                    $a="select * from xxx WHERE cat ='$bbbb'";
                }else{$a="select * from xxx";}
                $run=mysqli_query($co,$a) or die(mysqli_error());while($items=mysqli_fetch_array($run)){
                    $rows[] = $items;
                }}
                elseif(isset($_POST['low'])) {
                    if (isset($_POST['cat'])) {
                    $bbbb=$_POST['cat'];
                    $a="select * from xxx ORDER BY cost DESC and WHERE cat='$bbbb'";
                }else{$a="select * from xxx ORDER BY cost DESC";}
                    
                $run=mysqli_query($co,$a) or die(mysqli_error());
                while($items=mysqli_fetch_array($run)){
                    $rows[] = $items;
                }$rows = array_reverse($rows ,true);
                }
                
                elseif(isset($_POST['high'])) {
                    if (isset($_POST['cat'])) {
                    $bbbb=$_POST['cat'];
                    $a="select * from xxx ORDER BY cost and WHERE cat='$bbbb'";
                }else{$a="select * from xxx ORDER BY cost";}
                $run=mysqli_query($co,$a) or die(mysqli_error());
                while($items=mysqli_fetch_array($run)){
                    $rows[] = $items;
                }$rows = array_reverse($rows ,true);
                }
                
                    else if (isset($_POST['cat'])) {
                    $bbbb=$_POST['cat'];
                    $a="select * from xxx WHERE cat='$bbbb'";
                    $run=mysqli_query($co,$a) or die(mysqli_error());while($items=mysqli_fetch_array($run)){
                    $rows[] = $items;
                }$rows = array_reverse($rows ,true);
                
                }
                else if (isset($_GET['search'])) {
                    $bbbb=$_GET['gsearch'];
                    $a="select * from xxx WHERE pn='$bbbb' or cat='$bbbb' or pid='$bbbb' or des='$bbbb'";
                    $run=mysqli_query($co,$a) or die(mysqli_error());while($items=mysqli_fetch_array($run)){
                    $rows[] = $items;
                }if(empty($rows)){
                    echo "<script>alert('Not Found')
                    window.location.href ='https://meshuga-bullets.000webhostapp.com/index.php';
                    </script>";
                }else{
                $rows = array_reverse($rows ,true);}
                }
                else{$a="select * from xxx";$run=mysqli_query($co,$a) or die(mysqli_error());while($items=mysqli_fetch_array($run)){
                    $rows[] = $items;
                }$rows = array_reverse($rows ,true);}
                
                
                
                $de=100;
                foreach($rows as $row){
                    
                    echo "<div class='ooo' style='margin:0.5%;margin-right:0.8%;border:8px solid green;border-radius:15px;float:left;width:46.5%'><all style=''><img style='background-color:green;height:23%;width:100%; ' src='uploads/".$row['myf']."' >
                    <div class='ok' style='background-color:#e8fe8c;padding:5%'><pn style='font-size:2.3em;color:black;'><b>". $row['pn'] . "</b></pn></br></br>
                    <button style='font-size:2em;width:100%;color:white;background-color:green'type='button' class='collapsible20'>more<iii 
                    style='border-radius:50%;padding:3px;background-color:white;color:green;margin-left:10px'class='fas fa-info-circle'></iii></button>
                    <div style='width:41%;font-size:2.5em;background-color:#e8fe8c;'class='content'><pre><b>ID:" . $row['pid'] . "</br>" . $row['des'] . "</b></pre></div>
                    <az style='font-size:2.2em'> " . $row['cat'] . " </br><b>price: </b><price style='color:green;'><b> " .$row['cost'] . "</b></price>-rs</br><b>qnty: </b>" . $row['qun'] . " </br><b>Status: #</b>" . $row['stock'] . "</br>
                    
                    <form method='POST'>
                    <input style='display:none;'type='text' readonly='true' name='myf1'  value=" .$row['myf'] . ">
                    <input style='margin-top:7px;width:48%;color:green;font-size:1.2em;'type='submit' name='fs' id='fs' value='Full Stock' >
                    <input style='display:none;'type='text' readonly='true' name='myf2'  value=" .$row['myf'] . ">
                    <input style='margin-top:7px;width:48%;color:red;font-size:1.2em;'type='submit'  name='ns' id='ns' value='No Stock' >
                    
                    </form>
                    <button style='margin-top:0;width:100%;color:black;font-size:1.2em;'type='button' id='con1'  class='collapsible20'><b>Delete</b></button>
                    <div style='width:41%'class='content'>
                    <form method='GET'>
                    <input style='display:none;'type='text' readonly='true' name='myf3'  value=" .$row['myf'] . ">
                    <input style='background-color:green;margin-top:8%;width:100%;color:white;font-size:1.4em;'type='submit' name='con' value='confrom' >
                    
                    </form>
                    </div>
                    </az></div>
                    
                    </all>
                    </div>";
                $array[100]=array('0');
                $float=0;
                $b=$row['cat'];
                if(in_array($row['cat'], $array)){
                $float=100;    
                }
                if($float!=100){
                $array[$c]=$b;
                    $c=$c+1;
                }
                }
                mysqli_free_result($run);
                mysqli_close($co);}
             
                


    
?></div>



<script>
var coll = document.getElementsByClassName("collapsible20");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
      content.style.position= "absolute";
      
    }
  });
}
</script>
<script>
var coll = document.getElementsByClassName("coll");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
      document.getElementById('spin1').className = "fas fa-clipboard-list";
    } else {
      content.style.display = "block";
      content.style.position= "absolute";
      document.getElementById('spin1').className = "fas fa-clipboard-list fa-spin";
    }
  });
}</script>

<?php
if (isset($_POST["fs"])) {
    
    $co2=mysqli_connect('localhost','id13518568_manideep9949466287','Online>on9949','id13518568_rise');
    $path2=$_POST['myf1'];
    $a2="UPDATE xxx SET stock='Available' WHERE myf='$path2'";
     $run2=mysqli_query($co2,$a2) or die(mysqli_error());
     echo "<script>window.location.href ='https://meshuga-bullets.000webhostapp.com/index.php';</script>";
    
} else if (isset($_POST["ns"])){
    $co2=mysqli_connect('localhost','id13518568_manideep9949466287','Online>on9949','id13518568_rise');
    $path2=$_POST['myf2'];
    $a2="UPDATE xxx SET stock='Out of Stock' WHERE myf='$path2'";
     $run2=mysqli_query($co2,$a2) or die(mysqli_error());
      echo "<script>window.location.href ='https://meshuga-bullets.000webhostapp.com/index.php';</script>";
}
?>
  

<?php
if (isset($_GET['con'])) {
    $co=mysqli_connect('localhost','id13518568_manideep9949466287','Online>on9949','id13518568_rise');
    $path=$_GET['myf3'];
    $folder="uploads/".$path;
    unlink("$folder");
    $a="delete from xxx WHERE myf='$path'";
    $run=mysqli_query($co,$a) or die(mysqli_error());
    echo "<script>window.location.href ='https://meshuga-bullets.000webhostapp.com/index.php';</script>";
}?>



</body>

</html>