<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="formall">
<div class="title">
   login to your account
</div>
   <div class="imagecontainer">
    <img src="./loginimage.png " alt="person" class="person">
   </div>
 <form action="" method="post">
<label for="user"><b>email:</b></label><br>
<input id="email" type="email" placeholder=" enter your email" name="user" required><br>
<label for="pass"><b>password</b></label><br>
<input type="password" placeholder="enter your password" name="pass" requireq><br>
<button type="submit"><a href="home.php"> login</a></button><br>
<label>
<input type="checkbox" checked="checked" name="remember">remember-me

</label>
<div class="container"  style="background-color: blue;" ></div>
<button type="button" name="cancelbutt">cancel</button><br>
<span class="pass" >Forgot <a href="#" >password?</a> </span>&nbsp;&nbsp;&nbsp;&nbsp;
<span class="pass" >not a member?<a href="signup.php" >signup now</a> </span>
 </form> 
</div>  
</body>
</html> 
