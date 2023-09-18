<?php
if(isset($_POST['m1submit'])){
$a=$_POST['mytxt1'];
$b=$_POST['mytxt2'];
$c=$_POST['mytxt3'];
$n=$_POST['mytxtn'];
$d=$_POST['mytxt4'];
$e=$_POST['mytxt5'];
$f=$_POST['mytxt6'];
$g=$_POST['mytxt7'];


$con = mysqli_connect("localhost","root","ONEPLUS8=9","student");
if($con){
    
    echo'<script>alert("Connected") </script>';

}
else{
    echo'<script>alert("Not Connected")</script>' ;
}
$query="insert into job_tab values($a,'$b','$c','$n',$d,'$e','$f',$g)";
$result=mysqli_query($con,$query);
if(!$result){
    die('Query connection Failed').mysqli_error();
}
echo '<script>alert("Record Inserted Successfully")</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<style>
    h1 {
    
    font-family: 'Amaranth';font-size: 40px;
    position: absolute;
    left: 60px;
    top: 60px;
}

    body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {

  /* The image used */
  background-image: url("c4.jpeg");

  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: right;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  width: 400px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
/*.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}*/
.btn {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}
h2{
  position:center;
}
.btn:hover {
  background-color: #3e8e41;
  color: white;
}


</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
    <title>Add Details </title>
</head>
<link rel="shortcut icon" href="hat.png">
<body>
    

<div class = bg-img>
  
<h1 style="background-color:gray" >| ADD CANDITATE |</h1>


<form name=myform method=post  class=container>
  <input type="text"  name="mytxt1" placeholder="Candidate ID" ><br><br>
  <input type="text"  name="mytxt2" placeholder="Name" pattern="[A-Za-z]{30}" ><br><br>
  <input type="text" list="mytxt_3" name="mytxt3" id="mytxt3" placeholder="Gender" ><br><br>
  <datalist id="mytxt_3">
    <option value="FEMALE">
    <option value="MALE">
    <option value="OTHER">
  </datalist>
  <input type="text" list="mytxt_n" name="mytxtn" id="mytxtn" placeholder="Designation" ><br><br>
  <datalist id="mytxt_n">
    <option value="Representative">
    <option value="Specialist">
    <option value="Analyst">
    <option value="Co-ordinator">
    <option value="Adminstrator">
    <option value="Generalist">
    <option value="Agent">
  </datalist>
  <input type="text"  name="mytxt4" placeholder="Age" ><br><br>
  <input type="text"  name="mytxt5" placeholder="Class" ><br><br>
  <input type="text"  name="mytxt6" placeholder="Blood group" ><br><br>
  <input type="text" id="phone" name="mytxt7" placeholder="contact number" ><br><br>
  <input type=submit  class="btn" name="m1submit" value=submit>
  <input type=reset class="btn" value=reset><br><br>
 
</form>
</div>
</body>
</html>