<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
   <h2>Login</h2>
</div>
<form method="post" action="login.php">
 <div class="input-group">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
     
    <button type="submit" name="login" class="btn">Login</button>
 <!-- <button class="btn" type="button" onclick=window.parent.location.href='index.php' target='_parent'> --> <!-- Login! </button> -->
 </div>
<p>
Not registered yet? <a href="register.php">Register</a>
</p>
</form>
<?php

    if(isset($_POST['login'])){
		
		$username= $_POST['username'];
		$password=$_POST['password'];
		
		$check = "select*from users where username='$username' AND password ='$password'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				
				window.location.href='index.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('register.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('register.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}





?>

</body>
</html>
