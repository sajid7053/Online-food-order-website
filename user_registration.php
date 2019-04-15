<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>user registration</title>
        <link rel="stylesheet" type="text/css" href="reg.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Food<span>Shala</span></div>
		</div>
		<br>
		<div class="login">
                    <form action="signup_script.php" method="post">
                    <h1> User Registration</h1>
                    <input type="text" placeholder="Enter your name" name="name"><br><br>
                    <input type="email" placeholder="Enter your email" name="email"><br><br>
                    <input type="password" placeholder="Enter password" name="password"><br><br>
                    <input type="text" placeholder="Enter contact number" name="contact"><br><br>
                    <input type="submit" name="submit_btn" value="Register">
                    </form>
		</div>
    </body>
</html>