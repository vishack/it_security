<?php require_once("connection.php");?>

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
<body>

	<section class="hero_image">

    <nav id="nav-menu-container">
				      
<ul class="nav-menu">
	
<li class="menu-active">
<a href="index.php">Home</a></li>
	
<li><a href="about_us.php">About Us</a></li>

<li><a href="services.php">Service</a></li>
	
<li><a href="login.php">Login</a></li>
				          
					         
				            
				          
</li>			          
				        
</ul>
				      
</nav>


   
   <div id="container">
   <!--	 <h1 align="center">Registration Form</h1>  -->
   	<form method="post">
   <input type="text" placeholder="user name" id="user_name" onkeyup="check_user()" name="user_name" class="input" required/><br><br>
   <div id="checking">Checking...</div>

   <input type="password" placeholder="Password" name="password" class="input" required/><br><br>


 <!--    <input type="password" placeholder="Confirm Password" name="password2" class="input" required/><br><br>    -->
   <input type="email" placeholder="email" name="email" class="input" required  /><br><br>
   <input type="text" placeholder="First Name" name="firstName" class="input" required/><br><br>
   <input type="text" placeholder="Last Name" name="lastName" class="input" required/><br><br>
   <input type="number" placeholder="Age" name="age" class="input" required/><br><br>
   <input type="number" placeholder="Phone Number" name="phoneNumber" class="input" required/><br><br>
   <input type="text" placeholder="Address" name="address" class="input" required/><br><br>
  

   <input type="submit" id="register" name="register" value="register" />

    <a href="login.php" style="color: #ffff33">Log-in</a> 
   </form>
</div>


<?php if (isset($_POST['register'])) {
     
     $user_name=$_POST['user_name'];
     $password=$_POST['password'];


     $email=$_POST['email'];
     $firstName=$_POST['firstName'];
     $lastName=$_POST['lastName'];
     $email=$_POST['email'];
	 $age=$_POST['age'];
     $phoneNumber=$_POST['phoneNumber'];
     $address=$_POST['address'];






     $q="INSERT INTO users (user_name, password, email) VALUES('$user_name', '$password', '$email')";
     $r=mysqli_query($con, $q);


     $query1 = "INSERT INTO users_personal (firstName, lastName, email, age, phoneNumber, address) VALUES('$firstName', '$lastName', '$email', '$age', '$phoneNumber', '$address')";
     mysqli_query($con, $query1);

     if($r){
     	header("location:login.php");
     }else{
     	echo $q;
     }
}
?>
<script src="sub_file/jquery-3.4.1.min.js"></script>
<script>

	document.getElementById("register").disabled= true;
	function check_user(){
		var user_name = document.getElementById("user_name").value ;

		$.post("sub_file/user_check.php",
		{
			user: user_name
		},

		function(data, status){

			if (data=='<p style="color:red">User already registered</p>') {
				document.getElementById("register").disabled= true;
			}
			else{
				document.getElementById("register").disabled= false;
			}

			document.getElementById("checking").innerHTML= data;
		}
		);
	}
</script>
</body>
</html>