<?php

$con=mysqli_connect("localhost","root","","foodsh");
if(isset($_POST['login_btn'])){
    extract($_POST);
    $sql1="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result=mysqli_query($con,$sql1);
    if($result){
        if(mysqli_num_rows($result)>0){
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            header("location:foodpro.php");
        }
        else {
            echo "incorect email or password";
        }
    }
}
?>

