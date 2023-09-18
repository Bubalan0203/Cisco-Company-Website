<?php
$con = mysqli_connect("localhost","root","ONEPLUS8=9","student");
   $query = "select * from job_tab";
   $result1 = mysqli_query($con,$query);
   if (!$result1){
       die('query failed').mysqli_error();
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Details </title>
</head>
<link rel="shortcut icon" href="hat.png">
<style>
.bg {
    height:1000px ;
    background: linear-gradient(to top left, #ffcc99 0%, #66ccff 103%)
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  }

  .bg-table {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0); /* Black w/opacity/see-through */
  color: black;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  }

  table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 70px;
}
</style>
<body>
   <div class=bg>
   <center><br><br>
    
    <div class="bg-text">
    <h1>Display Candidate Details</h1>
    </div><br><br>
    <div class="bg-table">
    <table border=1>
        <tr>
        
            <th><?php echo "Candidate ID";?> </th>
            <th> <?php echo"Name"; ?> </th>
            <th> <?php echo"Gender"; ?> </td>
            <th> <?php echo"Age"; ?> </th>
            
            <th> <?php echo"Blood Group"; ?> </td>
            <th> <?php echo"Contact"; ?> </th>
            
        </tr>    
          
        <?php
        
            while($row = mysqli_fetch_assoc($result1))
            {
        ?>
        <tr>
        
            <td ><?php print_r($row['s_id']);?> </td>
            <td> <?php print_r($row['s_name']); ?> </td>
            <td> <?php print_r($row['gender']); ?> </td>
            <td> <?php print_r($row['age']); ?> </td>
            
            <td> <?php print_r($row['blood']); ?> </td>
            <td> <?php print_r($row['phone']); ?> </td>

            
        </tr>    
            <?php  }?>
        
    </table>
     </div>
     </center>

     

   </div>

</body>
</html>