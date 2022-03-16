<?php
     $username = $_POST['username'];
     $moblie = $_POST['moblie'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $repeat = $_POST['repeat_pass'];
    
     //Database Connection 
     //echo ""+$username;

     $conn = new mysqli('http://127.0.0.1:5500/','root','','admindb');
     if($conn->connection_error){
         die('Connection Failed :' .$conn->connection_error);
     }
     else{
         $stmt = $conn->prepare("insert into registration (username, moblie, email, password, repeat_pass)
         values(?,?,?,?,?)");
         $stmt->bind_param("sisss", $username, $moblie, $email, $password, $repeat_pass);
         $stmt->execute();
         echo "registration Successfully...";
         $stmt->close();
         $conn->close();
     }
?>