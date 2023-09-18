<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="studyprogram.css" >
</head>
<body>
    <div class="divall">

    
    <div class="divcont1">
<div class="div1"><img src="./UR logo.png" ></div>
<div class="div2">
    <h1>university of Rwanda online library</h1>
<h2>Please choose your study programme to see which resources you can access.</h2>
</div>
<div class="div3">
    <button class="login"><a href="login.php">login</a> </button>
    <button class="signup"><a href="signup.php" >signup</a></button>
    <div class="search-container">
        <form action="#" >
          <input  type="text" placeholder="Search.." name="search">
          <button type="submit">search</button>
        </form>
      </div>
</div>

</div>
<div class="topnav">
    <a  href="home.php">Home</a>
    <a href="resources.php">resources</a>
    <a class="active" href="studyprogram.php">study program</a>
    <a href="studentsupp.php">student support</a>
</div>
    <div class="select">
<h1>Select your Study Programme
</h1>

<p>When you select your study programme a list of databases you are able to access through <br>that programme will be shown along with other useful resources suggested by your programme.

</p>
<p>You should only select the study programme you are a member of as if you select a different one<br> you may not be able to access all the resources shown.
</p>
<form>
    <select id="program" name="program">
        <option value="program1" >PHD by research in ICT (Option in Computer Science)</option>
        <option value="program2" >Msc in Information Systems (Option: Internet Technologies)</option>
        <option value="program3" >PhD in Energy Economics.</option>
        <option value="program4" >PhD in Electrical Power Systems.</option>
        <option value="program4" >PhD in Renewable Energy.</option>
        <option value="program4" >MSc in Energy Economics.</option>
        <option value="program4" >MSc in Renewable energy.</option>
        <option value="program4" >MSc in Electrical Power Systems.</option>

        </select>
        <button class="button" >go</button>

</form>
    </div>
    <div class="footer">
        <div class="footer1"> 
            <ul>
                <li ><a href="#">about us </a></li>

            <li ><a href="#"><img src="./about us.png"> </a></li>
            <li ><a href="#">services </a></li>
            <li ><a href="#">privacy policy </a></li>

    
        </ul>
    </div>
        <div class="footer2"> 
            <ul>
            <li ><a href="#">char with librarian live  </a> </li>
            <li ><a href="#"><img src="./whatsaap icon.png"> </a> </li>
            <li ><a href="#"><img src="./caal.png"> </a> </li>
            <li ><a href="#"><img src="./messa.jpg"> </a> </li>

    
        </ul>
    </div>
        <div class="footer3">
             <ul>
            <li ><a href="#">follow us on</a> </li>
            <li ><a href="#"><img src="./fb icon.png"> </a> </li>
            <li ><a href="#"> <img src="./instagra icon.jpg"> </a> </li>
            <li ><a href="#"> <img src="./twiiter ico.png" ></a> </li>
    
        </ul>
    </div>
    </div>

</body>
</html>