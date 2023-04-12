<?php
session_start();
if(!isset($_SESSION['email'])){
  header('Location: user_signup.php');
    exit();
} 
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
            <h1 class="w  fw-bold ">OTP Verification</h1>
            
            <div class=""><p class="text-muted "><b>We'have sent a verification code to your email - <span class="oemail"></span> </b></p></div>
            </div>
            
            <form method="get">
            <div class=" pt-2  px-5 t">
            <h2 class="w2">OTP</h2>
            <input class="w-100  p-2 mb-2"  type="otp" id="otp" name="otp" placeholder="Enter verification code" required><br>
        
            
            <div class="text-center py-4 ">
                <button type="submit" name="submit1" class="btn  btn-primary  px-5 text-white ">Login</button>
           
            </div>
        </form>
        
    
            </div>
            </div>
        </div>


<script>
    </script>

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



// if(isset($_GET['submit'])) {
// $fname = $_GET["fname"];
// $lname = $_GET["lname"];
// $email = $_GET["email"];
// $pass = $_GET["pwd"];
// $cpass= $_GET["cpwd"];



// $user_emailquery = "select * from user_signup where email='$email' ";
// $mech_emailquery = "select * from mech_signup where email='$email' ";

// $user_query = mysqli_query($conn,$user_emailquery);
// $mech_query = mysqli_query($conn,$mech_emailquery);

// $user_emailcount = mysqli_num_rows($user_query);
// $mech_emailcount = mysqli_num_rows($mech_query);

// if($user_emailcount > 0 || $mech_emailcount > 0){
//     echo'<script> if(!alert("Email is already registered")){
//         window.location.href = "user_signup.php";
//     } </script>';
// } else{
//         if($pass === $cpass){
            
//         }else{
//             echo'<script> if(!alert("Confirm Password is not matching")){
//                 window.location.href = "user_signup.php";
//             } </script>';

//         }
//      }
//  }


 echo $fname = $_SESSION['fname'];
 $lname = $_SESSION['lname'];
 $email =$_SESSION['email'];
 $pass =$_SESSION['pwd'];

 if(isset(($_GET['submit1'])) ) {
    // $_GET["fname"];
    //  $_GET["lname"];
    //  $_GET["email"];
      
    $otp= $_GET["otp"];
    
    $query = "SELECT * FROM otp WHERE email = '$email' AND otp = '$otp'";
    $result = mysqli_query($conn, $query);
    // mysqli_num_rows($result) == 1
    if ($otp == '1234') {
        $sql = "INSERT INTO user_signup (fname,lname,email,pass)
        VALUES ('$fname','$lname','$email','$pass')";

          if (mysqli_query($conn, $sql)) {
            $query = "DELETE FROM otp WHERE email = '$email'";
            echo '<script>
            if(!alert("Your login id is created. You can login now")){
              window.location.href = "index.php";
            }</script>';
          
            
          } 
          else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        }else{ echo '<script>
            alert("Your OTP is invalid")  
            </script>';
        }
    
      
    
        }
 
mysqli_close($conn);
// session_unset();
// session_destroy();
?>

</body>
</html>