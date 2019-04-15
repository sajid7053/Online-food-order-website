<?php

$con1=mysqli_connect("localhost","root","","foodsh");
if(isset($_POST['login_btn1'])){
    extract($_POST);
    $sqla="SELECT * FROM employee WHERE email='$email' AND password='$password'";
    $result=mysqli_query($con1,$sqla);
    if($result){
        if(mysqli_num_rows($result)>0){
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            header("location:foodpro2.php");
        }
        else {
            echo "incorect email or password";
        }
    }
}
?>