<?php
session_start();
require_once("connection.php");
?>

<!doctype html>
<html>
<link rel="stylesheet" href="custom.css">

<style>
*{margin:0px; padding:0px;}
#container{position: fixed;
width: 500px;
height: 200px;
margin: 5% auto; /* Will not center vertically and won't work in IE6/7. */
left: 0;
right: 0;}
.input{width:92%; padding:2%;}
#checking{
    color: #ffff33;
}


</style>



   <section class="hero_image">

    <nav id="nav-menu-container">
                  
<ul class="nav-menu">
   
<li class="menu-active">
<a href="index.php">Home</a></li>
   
<li><a href="about_us.php">About Us</a></li>

<li><a href="services.php">Service</a></li>
   
<li><a href="register.php">Sign-Up</a></li>
                      
                        
                        
                      
</li>                 
                    
</ul>
                  
</nav>



<body>
  <!--  <h1 align="center">Login Form</h1>  -->
   <div id="container">
   	<form method="post">
   		<input type="text" class="input" placeholder="username" name="user_name" /><br><br>
   		<input type="password" class="input" placeholder="password" name="password" /><br><br>
   		<input type="submit" value="login" name="login" />
   		<a href="register.php" style="color: #ffff33">Register</a> 
   	</form>
   </div>

   <?php
   if (isset($_POST['login'])) {
   	$user_name = $_POST['user_name'];
   	$password = $_POST['password'];

   	$q=" SELECT * FROM users WHERE user_name='$user_name' AND password='$password'";
      $s="SELECT * FROM status WHERE name='$user_name'";
   	$r=mysqli_query($con, $q);
      $t=mysqli_query($con, $s);
   	if($r){
   		if(mysqli_num_rows($r)>0){
   			//login success
            $userdata=mysqli_fetch_array($r);
            $userdata1=mysqli_fetch_array($t);
   			//$_SESSION['username'] = $user_name;
            //$_SESSION['username'] = $u1;
            if ($userdata['user_name'] == $userdata1['name']) {
               $_SESSION['username']=NULL;
               $_SESSION['username']=$user_name;
                header("location:ask.php");
         
            }
               else{
                  $_SESSION['username']=NULL;
               $_SESSION['username']=$user_name;

               header("location:welcome.php");}
   		} else{
   			// login again
   			echo 'Your password and user name did not matched';
   		}
   	}else{
   		//problem in query
   		echo $q;
   	}
   }
 ?>
</body>
</html>