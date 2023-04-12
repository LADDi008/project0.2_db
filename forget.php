<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id" content= "768682101981-ne4r9hp4g2jdo8j2tt0ds0ol167pd9lq.apps.googleusercontent.com">



  <style>
         .w{font-size:30px;}
    h2{font-size:20px;}
    .desk{height:100vh;}
    .de{width: 450px;;}
    </style>
</head>
<body>
<div class="otp"> 
        <div class="desk d-flex justify-content-center align-items-center ">
            <div class="de shadow-lg ">
            <div class="text-center  pt-3">
            <h1 class="w  fw-bold ">Forgot Password</h1>
            
            <!-- <div class=""><p class="text-muted "><b>We'have sent a verification code to your email - <span class="oemail"></span> </b></p></div> -->
            </div>
            
            <form method="post">
            <div class=" pt-2  px-5 t">
            <h2 class="w2">Email</h2>
            <input class="w-100  p-2 mb-2"  type="email" id="email" name="email" placeholder="Enter your email" required><br>
        
            
            <div class="text-center py-4 ">
                <button type="submit" name="submit" class="btn  btn-primary  px-5 text-white ">Submit</button>
           
            </div>
        </form>
        
    
            </div>
            </div>
        </div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])) {

    $email = $_POST["email"];
    $_SESSION['email']  = $_POST["email"];


$user_emailquery = "select * from user_signup where email='$email' ";
$mech_emailquery = "select * from mech_signup where email='$email' ";

$user_query = mysqli_query($conn,$user_emailquery);
$mech_query = mysqli_query($conn,$mech_emailquery);

$user_emailcount = mysqli_num_rows($user_query);
$mech_emailcount = mysqli_num_rows($mech_query);


if($user_emailcount > 0 || $mech_emailcount > 0){

    if($user_emailcount > 0  ){
      header("Location: resetpass.php");
    }elseif($mech_emailcount > 0 ){
      header("Location: resetpass.php");
    }else{
      echo'<script> alert("Password is wrong") </script>';
    }
    
}
else{
  echo'<script> alert("Email is not registered") </script>';
}

}
// header("Location: index.php");
mysqli_close($conn);
?>

</body>
</html>