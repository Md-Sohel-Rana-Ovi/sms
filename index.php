<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="style.css">
    <script src="https://kit.fontawesome.com/fc9d3996ec.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="navbar">
       <div class="nav-logo col-2">
         <img src="images/logo.png" alt="logo">


       </div>
       <div class="nav-heading col-5">
       <h3>Mononguru Coaching Center</h3>
       <p>We Provide Quality Eduaction</p>


       </div>
    <div class="navbar-menu col-5"> 
    <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About-us</a></li>
    <li><a href="#">Contact</a></li>
    
    <li><a href="#">Login</a>
        <div class="sub-menu">
		
            <form action="" method="post">
			<ul>
            
              <li><input type="submit" name="admin_login" value="Admin Login"></li><br>
               <li><input type="submit" name="student_login" value="Student Login"></li>
            </ul>
            </form>
		
        
        </div>
            <?php
                 if(isset($_POST['admin_login'])){
                     header("Location: admin_login.php");
                 }
                 if(isset($_POST['student_login'])){
                    header("Location: student_login.php");
                }

            ?>
          
        
          
     </li>
    </ul>      
 </div>
</div>
<!-- banner -->
<div id="banner">
    <img src="images/school4.jpg" alt="banner">
</div>
<!-- why choose us -->
<section id="why_choose">
    <br><br>
    <h1>Why Choose Us</h1>

    <div class="div_section">
        <div class="icon"><i class="fas fa-school"></i></div>
           <h3>Coaching Campus</h3>
           <p>The diversification and expansion of the School through adoption of new and topically relevant
           courses has led to further enhancement of our infrastructure in order to fulfill our growing needs.</p>
    </div>
    <div class="div_section">
        <div class="icon"><i class="fas fa-laptop"></i></div>
           <h3>Computer Education</h3>
           <p>Computers have taken over a major part of human activities and enabled people to have more leisure by reducing his work-load. Computer Education is started from the primary classes and is one of the optional subjects in the Senior Secondary classes.</p>
    </div>
    <div class="div_section">
        <div class="icon"><i class="fas fa-music"></i></div>
           <h3>Music</h3>
           <p>Training of Vocal as well as instrumental music is provided according to the taste and interest of the students from Std. I to XII. 'Indian classical' and 'western dance' are taught in the school by experts to train, guide and help those students interested in this form of art.

        </p>
    </div>
    <div class="div_section">
        <div class="icon"><i class="fas fa-flask"></i></div>
           <h3>Science Laboratory</h3>
           <p>The school has a well equipped laboratory of Physics, Chemistry, Biology, Computer Science, Maths and Social Studies for the students to experiment and learn because learning by doing makes concrete concept formation.</p>
    </div>
</section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<section class="footer">
    <div class="footer_div">
        <h1>ABOUT US</h1>
        <p>Oxford Convent Hr.Sec.School was established in 1996 in karond Bhopal.We Working From 19 to 20 years with Positive Attitued,<br>
        <button type="button">Read More</button>
        </p>
    </div>
     
    <div class="footer_div">
        <h1 class="h2">ABOUT</h1>
        <ul>
            <li><a href="#">About School</a></li>
            <li><a href="#">Director Message</a></li>
            <li><a href="#">Principal Message</a></li>
            <li><a href="#">Our Motto</a></li> 
        </ul> 
         
    </div>
     
    <div class="footer_div">
        <h1 class="h2">ACADEMICS</h1>
           <ul>
            <li><a href="#">Admission Procedure</a></li>
            <li><a href="#">Sports Corner</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">Dimensions Of School</a></li> 
            <li><a href="#">Transport Facility</a></li>  
        </ul>
    </div>
        <div class="footer_div">
        <h1>SOCIAL LINKS</h1>
        <div class="social_link">
       <i class="fab fa-facebook-square fa-2x"></i>
       <i class="fab fa-twitter-square fa-2x"></i>
       </div>
    </div>
   <div class="under_footer">
    <div class="footer1"><p>Copyright © All Rights Reserved</p></div>
    <div class="footer1"><p>Designed by Mohiuddin&Sohel</p></div>
     
</div>      
</section>

    
</body>
</html>