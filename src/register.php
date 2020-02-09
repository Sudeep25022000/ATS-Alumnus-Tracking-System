 <?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style >
    * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;/*
background-image: url(galaxy2.jfif); 
background-size: cover;*/

}


.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
 /* background: #5F9EA0;*/
  background:royalblue;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}


form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: black;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

    
  </style>
</head>
<body>

  <div class="header">
  	<h2 style="font-size: 50px;">Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label style="color:white; font-size: 30px;padding: 5px;">Name</label>
  	  <input  style=" padding: 10px;"type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="color:white;font-size: 30px;padding: 5px;">Email</label>
  	  <input style=" padding: 10px;" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	  <div class="input-group">
  	  <label style="color:white;font-size: 30px;padding: 5px;">Contact</label>
  	  <input style=" padding: 10px;" type="text" name="phone" value="<?php echo $phone; ?>">
  	</div>
	  <div class="input-group">
  	  <label style="color:white;font-size: 30px;padding: 5px;">Registration Number</label>
  	  <input style=" padding: 10px;" type="text" name="regno" value="<?php echo $regno; ?>">
  	</div>
	  <div class="input-group">
  	  <label style="color:white;font-size: 30px;padding: 5px;" >Year of passsing </label>
  	  <input style=" padding: 10px;" type="text" name="year" value="<?php echo $year; ?>">
  	</div>
	  <div class="input-group">
  	  <label style="color:white;font-size: 30px;padding: 5px;">Branch Name </label>
  	  <input style=" padding: 10px;" type="text" name="branch" value="<?php echo $branch; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="color:white;font-size: 30px;padding: 5px;">Password</label>
  	  <input style=" padding: 10px;" type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label style="color:white;font-size: 30px;padding: 5px;">Confirm password</label>
  	  <input style=" padding: 10px;" type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p style="color:white;">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html> -->
<!-- <?php //include('server.php') ?>
<html>
<head>
  <title>Registration Form</title>
    
  <style >
    * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #1f4037;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #99f2c8, #1f4037);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #99f2c8, #1f4037); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  
}


.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
 /* background: #5F9EA0;*/
  background:royalblue;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}


form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: black;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

    
  </style>
</head>
<body>
  <div class="form">
  <div class="header">
    <h2>Register</h2>
  </div>
  <div>
  <form method="post" action="register.php">
    <?php //include('errors.php'); ?>
    <label style="color:white;">Name</label>
    <div class="input-group" >
     <input style="color:black; background-color: lightgrey;"  type="text" placeholder="Enter your name" name="name" value="<?php //echo 
     $name; ?>">
    </div>
    <label style="color: white;">Email</label>
    <div class="input-group">
     <input  style="color:black; background-color: lightgrey;"  type="email" placeholder="Enter E-mail id " name="email" value="<?php //echo 
     $email; ?>">
    </div>
    <label style="color: white;">Phone Number</label>
    <div class="input-group">
    <input style="color:black; background-color: lightgrey;"  type="text" placeholder="Enter Phone Number" name="phone" value="<?php //echo 
    $phone; ?>">
    </div>
    <label style="color:white;">Registration Number</label>
    <div class="input-group">
    <input style="color:black; background-color: lightgrey;"   type="text" placeholder="Enter Your College Registration Number" name="regno" value="<?php //echo $regno; ?>">
    </div>
     <label style="color:white">Year of passsing </label>
     <div class="input-group">
     <input style="color:black; background-color: lightgrey;"   type="text" placeholder="Enter Year Of Passing" name="year" value="<?php //echo $year; ?>">
     </div>
     <label style="color: white;">Branch Name </label>
     <div class="input-group">
     <input style="color:black; background-color: lightgrey;"   type="text" placeholder="Enter Your Branch" name="branch" value="<?php// echo $branch; ?>">
    </div>
    <label style="color:white;">Username</label>
    <div class="input-group">
     <input style="color:black; background-color: lightgrey;"   type="text" placeholder="Enter username" name="name" value="<?php //echo $username; ?>">
    </div>
     <label style="color:white;">Password</label>
     <div class="input-group">
     <input style="color:black; background-color: lightgrey;" type="password" placeholder="Enter Password" name="password_1">
    </div>
     <label style="color:white">Confirm password</label>
     <div class="input-group">
     <input style="color:black; background-color: lightgrey;" type="password" placeholder="Confirm Password " name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
    </div>
    <p style="color:white;">
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</div>
</div>
</body>
</html> -->
