<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="signupform">
    <div class="title">
      signup to your new account
   </div>    <form action="signupconnect.php" method="post">
<label for="fname" ><b>firstname:</b></label><br>
<input type="text" placeholder="enter firstname" name="fname"><br>
<labe for="lname" ><b>lastname:</b></label><br>
<input type="text" placeholder="enter lastname" name="lname"><br>
<labe for="emai" ><b>Email or username:</b></label><br>
  <input type="email" placeholder="enter your email" name="email"><br>
<label for="reg"><b>registration number:</b></label><br>
<input type="number" name="reg"> <br>
<label for="prog"><b>choose a school</b></label><br>
<select id="school" name="school">
<option value="ict" >school of ict</option>
<option value="eng" >school of engineering</option>
<option value="science" >school of science</option>
<option value="mining" >school of mining </option>
</select><br>
<label for="level"><b>choose a level</b></label><br>
<select id="level" name="level">
<option value="leve1" >leve1</option>
<option value="leve2" >leve2</option>
<option value="leve3" >leve3</option>
<option value="leve4" >leve4</option>
</select><br>
<labe for="program" ><b>enter a program that you are currentry in:</b></label><br>
  <input type="text" placeholder="enter program" name="program"><br>
    </form>
    <div class="bottom">
      <button class="signup">signup</button>
   </div>
</body>
</html>