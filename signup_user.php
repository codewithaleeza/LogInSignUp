<?php
include("include/connection.php");
  if (isset($_POST['sign_up'])){
      $name= htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
      $pass= htmlentities(mysqli_real_escape_string($con,$_POST['user_password']));
      $cpass= htmlentities(mysqli_real_escape_string($con,$_POST['cpassword']));



      if($name==''){
        
          echo"<script>alert('We cannot verify your name')</script>";
      }
      // if(strlen($pass)<8){
      //     echo"<script>alert('Password should be minimum 8 characters!')</script>";
      //     exit();
      // }
      if($pass!=$cpass){
          echo"<script>alert('Your password do not match! Please enter again')</script>";
          exit();
      }
      $check_username="select * from users where user_name='$name'";
      $run_username=mysqli_query($con,$check_username);

      $check=mysqli_num_rows($run_username);

      if($check==1){
        echo"<script>alert('Email already exist, Please try again!')</script>";

        exit();
      }

    $insert="insert into users (user_name,user_password) values('$name','$pass')";
    $query=mysqli_query($con,$insert);

    if($query){
      echo"<script>alert('Congratulations $name, your account has been created successfully')</script>";

    }
    else{
      echo"<script>alert('Registration Failed, Try Again!')</script>";
    }


  }

 ?>
