<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
   <h2>Register</h2>
</div>
<form method="post" action="register.php">



 <div class="input-group">
    Username (Reg No.): <input type="text" name="username" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    Stream: <input type="text" name="stream" required><br><br>
    DoB: <input type="date" name="dob" required><br><br>
    Email: <input type="text" name="email" required><br><br>
    Ph No.: <input type="text" name="phone" required><br><br>
    Gender: </div>
    <input type="radio" name="gender" value="male" required>Male
            <input type="radio" name="gender" value="female">Female<br><br>
   <div class="input-group">
    Password: <input type="password" name="password" required><br><br>
    <a href="index.php">
    <button type="submit" name="register" class="btn">Register</button>
     </a>
 </div>
<p>
Existing Student? <a href="login.php">Login</a>
</p>
</form>
</body>
</html>
