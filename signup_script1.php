<?php
$con1= mysqli_connect("localhost","root","","foodsh");
if(isset($_POST['submit_btn1'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$sqlb="insert into employee(name,email,password,contact) values ('$name','$email','$password','$contact')";
$runb=mysqli_query($con1,$sqlb);
if($runb){
    echo 'successfully registered';
    header("refresh:2;url=index1.php");
}
else {
    echo "error:".mysqli_error($con1);
}
}
