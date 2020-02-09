<html>
<head>
<title>updation</title>
 <style> 
  body{
   background-color:whitesmoke;
   }
  input{
     width : 40%;
     height: 5%;
     border:1px;
     border-radius: 05px;
     padding : 8px 15px 8px 15px;
     margin: 10px 0px 15px 0px;
     box-shadow: 1px 1px 2px 1px grey;
   }
 </style>
</head>
<body>
     <center> 
      <h1>Updating of Data</h1>
   
   <form action="up.php" method="POST">
    <input type="text" name="Name" placeholder="Enter Name"/></br>
    <input type="text" name="Email" placeholder="Enter Email"/></br>
    <input type="text" name="Phone" placeholder="Enter Phone"/></br>
    <input type="text" name="RegistrationNumber" placeholder="Enter Registration Number"/></br>
    <input type="text" name="Year" placeholder="Enter Year"/></br>
    <input type="text" name="Branch" placeholder="Enter Branch"/></br>
    
    
    <input type="submit" name="update" value="UPDATE"/>
   </form>
  
  </center>
</body>
</html>

<?php

$connection = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connection,'reg');
if(isset($_POST['update']))
 {
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$RegistrationNumber = $_POST['RegistrationNumber'];
$Year = $_POST['Year'];
$Branch= $_POST['Branch'];


$email=$_POST['Email'];

  $query = "UPDATE `user` SET username='$Name', phone='$Phone', regno='$RegistrationNumber', year='$Year', branch='$Branch' where email='$Email' ";
  
  $query_run = mysqli_query($connection,$query);
  
  if($query_run)
   {
    echo '<script type = "text/javascript"> alert("Data Updated")</script>';
   }
  else
   {
    echo '<script type = "text/javascript"> alert("Data Not Updated")</script>';
   }
 }
 

?>
