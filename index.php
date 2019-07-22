<!-- ! press tab -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Home</title>
</head>

<body>
  <div class="container">

 <div class="login-html">
   <!--This is for the nav tab sign in and sign up -->
   <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
   <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
   <div class="login-form">
     <form class="sign-in-htm" action="" method="post">
       <div class="group">
         <label for="user" class="label">Username</label>
         <input id="username" name="username" type="text" class="input" autocomplete="off" placeholder="Enter Username"required>
       </div>
       <div class="group">
         <label for="pass" class="label">Password</label>
         <input id="password" name="password" type="password" class="input" data-type="password"  placeholder="Enter Password"autocomplete="off" required>
       </div>
<br>
       <div class="group">
         <input type="submit" class="button" style="color:white;" name="sign_in"  value="Sign In">
       </div>
       <!-- <div class="group">
         <div class="foot-lnk" style="color:white;">
           <a href="#forgot">Forgot Password?</a>
         </div>
       </div> -->
       <div class="hr"></div>
       <?php include("signin_user.php"); ?>

     </form>
     <form class="sign-up-htm" action="" method="POST">
       <div class="group">
         <label for="user" class="label">Username</label>
         <input id="username" name="user_name" type="text" class="input" required>
       </div>
       <div class="group">
         <label for="pass" class="label">Password</label>
         <input id="password" name="user_password" type="password" class="input" data-type="password" required>
       </div>
       <div class="group">
         <label for="pass" class="label">Confirm Password</label>
         <input id="pass" type="password" name="cpassword"class="input" data-type="password" required>
       </div>
       <div class="group">
         <input type="submit" class="button" style="color:white;" name="sign_up"value="Sign Up">
       </div>
       <div class="foot-lnk" style="color:white;">
         <label for="tab-1">Already Member?</a>
       </div>
       <?php include("signup_user.php"); ?>
     </form>
   </div>
 </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>
