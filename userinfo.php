<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle form submission
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile =$_POST['mobile'];
    $comments = $_POST['comments'];

    // Save data to the database
    $conn =  mysqli_connect("localhost", "root", "", "userdata");

    if ($conn) {
    echo "connection succssful";
    }
    else{
        echo "no connection";
    }

    $sql = "INSERT INTO users (user, email, mobile,comments) VALUES ('$user', '$email', '$mobile', '$comments')";

   
   echo "$sql";
   mysqli_query($conn,$sql);
   header('location:index.php');
}
?>