<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Generate OTP
$otp = rand(100000, 999999);
$email="laddiy009@gmail.com";
// Store OTP in database

// $query = "INSERT INTO otp (email, otp) VALUES ('$email', '$otp')";
// $result = mysqli_query($conn, $query);

// Send OTP via email

$to = $email;
$subject = "This is subject";         
$message = "<b>Your OTP is: $otp</b>";
$from="noreply.orvba@gmail.com";
$header = "From:$from";

         
if(mail ($to,$subject,$message,$header)){
    echo 'Email sent successfully';
} else {
    echo 'Email sending failed: ';
} 


// $mail->Username='noreply.orvba@gmail.com';
// $mail->Password='wpucpceparjmyptt';
// $mail->SMTPSecure='ssl';
// $mail->port=465;
// $mail->setFrom('noreply.orvba@gmail.com', 'ORVBA');

// $mail->addAddress($email);
// $mail->Subject = 'OTP Verification';
// $mail->Body = "Your OTP is: $otp";



// if ($mail->send()) {
//     echo 'Email sent successfully';
// } else {
//     echo 'Email sending failed: ' . $mail->ErrorInfo;
// }
?>

</body>
</html>