<?php
      
    $serverName='localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'resgistration';
    
    $con = mysqli_connect($serverName, $userName, $password, $dbName);
    if(mysqli_connect_errno()){
        echo "Failed to connect";
        exit();
     }
     echo "Connection success";
   
    
    $errors = array();
    //connect to db
   // $db = mysqli_connect('localhost','root','','resgistration');

    //once register btn is clicked

    if(isset($_POST['register'])) {
       
        $username = $_POST['username'];
        $name = $_POST['name'];
        $stream = $_POST['stream'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        
      
        $query = "insert into users(username, name, stream, dob, email, phone, gender, password) values('$username', '$name', '$stream', '$dob', '$email', '$phone', '$gender', '$password')";
        $run = mysqli_query($con,$query) ;
        
        if($run){
                  echo "form submitted";
         }else{
                  echo "Form not submitted";
             }

        
        $_SESSION['username']=$username;
        $_SESSION['success']="U r logged in";
        header('location: index.php');
      }

?>