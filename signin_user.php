<?php
session_start();
include("include/connection.php");

  if(isset($_POST['sign_in'])){
    $username= htmlentities(mysqli_real_escape_string($con,$_POST['username']));
    $pass= htmlentities(mysqli_real_escape_string($con,$_POST['password']));

    $select_user="select * from users where user_name='$username' AND user_password='$pass'";
    $query = mysqli_query($con, $select_user);
    $check_user=mysqli_num_rows($query);

    if($check_user==1){
      $_SESSION['user_name']=$username;

      $user= $_SESSION['user_name'];
      $get_user ="select * from users where user_name='$user'";
      $run_user= mysqli_query($con, $get_user);
      $row= mysqli_fetch_array($run_user);

      $user_name=$row['user_name'];

      echo"<script>window.open('home.php?user_name=$user_name','_self')</script>";
    }
    else{
      echo"

      <div class='alert alert-danger'>
        <strong>Check your email and password. </strong>

        </div>
        ";
        // use this code to refresh the site automatically after 2 sec.
        $url1=$_SERVER['REQUEST_URI'];
        header("Refresh: 2; URL=$url1");

    }


    }





 ?>
