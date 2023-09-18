
<?php
$con= mysqli_connect("localhost","root","","online_library");
if(!$con){

    die('could not connect'.mysqli_error());


  
}  ?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dashbord.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>
           

            <span class="logo_name">online library<br><br> admin dashboard</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Like</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="index.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <span class="text">total books</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <span class="text">most readed</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <span class="text">Total likes</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>
       
                <div class="activity-data">
                    <div class="data names">   <span class="data-title">Name</span>      <?php   

                   $result = mysqli_query($con,"SELECT * FROM student;");
                
                while ($row = mysqli_fetch_assoc($result)) {
        

        	
    ?>
                        
                        <span class="data-list"><?php echo $row['firstname'] ?>  <?php echo $row['lastname'] ?> </span>
                        <?php }  ?>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <?php   
                
$result = mysqli_query($con,"SELECT * FROM student;");

while ($row = mysqli_fetch_assoc($result)) {



?>
                        <span class="data-list"><?php echo $row['email'] ?></span>
                        <?php }  ?>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Level</span>

                        <?php   
                
$result = mysqli_query($con,"SELECT * FROM student;");

while ($row = mysqli_fetch_assoc($result)) {



?>
                        <span class="data-list"><?php echo $row['level'] ?></span>
                        <?php }  ?>
                    </div>
                    <div class="data type">
                        <span class="data-title">Reg number</span>

                        <?php   
                
$result = mysqli_query($con,"SELECT * FROM student;");

while ($row = mysqli_fetch_assoc($result)) {



?>
                        <span class="data-list"><?php echo $row['regnumber'] ?></span>
                        <?php }  ?>
                    </div>
                    <div class="data status">
                        <span class="data-title">Program</span>

                        <?php   
                
                $result = mysqli_query($con,"SELECT * FROM student;");
                
                while ($row = mysqli_fetch_assoc($result)) {
                
                
                
                ?>
                        <span class="data-list"><?php echo $row['program'] ?></span>
                        <?php }   
                        mysqli_close($con);?>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <script src="dashbord.js"></script>
</body>
</html>