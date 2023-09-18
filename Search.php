<?php
if(isset($_POST['mysubmit'])){
    $reg=$_POST['mytxt1'];
$con = mysqli_connect("localhost","root","ONEPLUS8=9","student");
    
    $query="select * from job_tab where s_id=$reg";
    $result= mysqli_query($con,$query);
    if (!$result){
        die('query failed').mysqli_error();
    }   
}
?>
<!DOCTYPE html>
<link href='https://fonts.googleapis.com/css?family=Asul' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    
</head>
<link rel="shortcut icon" href="hat.png">
<style>
    body{
      background-image: url("s3.jpeg");
      background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: right;
        font-family: 'Asul';font-size: 22px;
        
        }
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
  color: white;
  
  }

  * {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: center;
  width: 50%;

  background: #f1f1f1;
}

form.example button {
  float:center;
  width: 10%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
ul {
  list-style-type: square;
}
li {
    font-family: 'Calistoga';font-size: 22px;
} 
.bg {
    height:1000px ;
}
</style>
<body >
<div class=bg>
    <center>
<div class="bg-text">
    <h1>Cisco</h1>
    </div><br><br>
<br><br><br> 
<form class="example" method=post>
 <input type="text"  placeholder="Enter student ID" name="mytxt1">
  <button type="submit" name="mysubmit"><i class="fa fa-search"></i></button>
</form>
<ul>
         <?php
            if(isset($_POST['mysubmit'])){
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <li><b>Student ID :</b><?php print_r($row['s_id']);?> </li>
            <li><b>Name       :</b><?php print_r($row['s_name']);?> </li>
            <li><b>Gender     :</b><?php print_r($row['gender']); ?> </li>
            <li><b>Age        :</b><?php print_r($row['age']); ?> </li>
           
            <li><b>Blood Group:</b><?php print_r($row['blood']);?> </li>
            <li><b>Contact    :</b><?php print_r($row['phone']);?> </li>
            
            
        </ul>  
        <?php  }}?>
</center>   
</div>
</body>
</html>