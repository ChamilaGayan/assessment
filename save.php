<?php
require_once 'conn.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $enc_password=md5($password);
   
    $sql="INSERT into form (`name`,email,mobile,`password`,`date`) 
    VALUES ('$name', '$email', '$mobile', '$enc_password', 'NOW()' )";
    $insert = $conn->query($sql);

  
    if ($insert) {
      // echo "Data Inserted!";
      print "Message is Saved!";
      true;
      }else {
        echo "Error!";
      }
?>