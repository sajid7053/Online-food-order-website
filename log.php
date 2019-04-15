<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="logi.css">
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
                    <form action="login_submit.php" method="post">
				<input type="text" placeholder="username" name="email"><br>
				<input type="password" placeholder="password" name="password"><br>
                                <input type="submit" name="login_btn" value="Login">
                    </form>
		</div>
    </body>
</html>
