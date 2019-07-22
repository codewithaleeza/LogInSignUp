<?php
session_start();
include("include/connection.php");

if(!isset($_SESSION['user_name'])){
  header("location: index.php");
}
else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Home</title>
</head>

<body>
  <?php
$user=$_SESSION['user_name'];
$get_user="select * from users where user_name='$user'";
$run_user=mysqli_query($con,$get_user);
$row=mysqli_fetch_array($run_user);

$user_name=$row['user_name'];


 ?>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between"  style="background-color: black">
   <h3 style="color:white;"> Welcome! <?php echo "$user_name" ?>
</h3>
  <form class="form-inline">
    <button class="btn btn-dark my-2 my-sm-0" type="submit"><a href="logout.php" class="btn btn-danger">Log Out</a></button>
  </form>
</nav>

  <div class="container2" align="center">
    <img src="images/tunnel.jpg" width="1200px" >
<h1> </h1>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>
<?php } ?>
