<!DOCTYPE html>
<html lang="en">
<head>
	<title>@J-Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="ajsphere/public/js/bootstrap/bootstrap.min.js"></script>

<?php

//{{HTML::script('js/bootstrap/bootstrap.min.js');}}

//{{ HTML::style('css/bootstrap/'); }}
?>
</head>
<body>
<form name="user_login_form" id="user_login_form" class="user_login_form form-horizontal" method="post" action="">
	<input type="text" name="login_user_name" id="login_user_name" class="form-control login_user_name" placeholder="user name" value="" required="required">
	<input type="text" name="login_user_password" id="login_user_password" class="form-control login_user_name" placeholder="password" value="" required="required" >
	<input type="submit" name="login_button" id="login_button" class="form-control login_button " value="Login">
</form>
</body>
</html>
