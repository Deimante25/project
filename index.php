<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Noble Green</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    <header>
        <div class="container">
        <div id="logo">
            <a href="index.php"><img src="images/Logo2.png" style="max-width:100%;height:auto;" height="250" width="300" alt="logo"></a>
        </div>
        <nav>
          <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="../green/form/public/courses.php" href="courses.php">Courses</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contacts.php">Contact Us</a></li> 
          </ul>  
        </nav>
        </div>
    </header>
    <div class="showcase">
            <img src="cover.jpg" alt="cover" style="width:100%;">
            <div class="text">Blooming is Here</div>
            <div class="sub-text">A variety of flowers to spark your imagination</div>
    </div>
    
            <section id="boxes">
                <div class="box">
                <img src="images/courses.jpg" alt="kursai">
                <div class="boxtext">
                <h3>Flower Design Courses</h3>
                <p>We offer a variety of courses for flower enthusiasts who want to learn create flower arragements for special occasions or to brihten home interior.<br><br><a href="courses.php">Read More</a></p>
                </div>
                </div>
        
                    <div class="box">
                    <img src="images/shop.jpg" alt="apiemus">
                     <div class="boxtext">
                    <h3>About Us</h3>
                    <p>We are a group ethusiasts about plants who want to share the passion with others through courses and workhops at our downtown studio.<br><br><a href="aboutus.php">Read More</a></p>
                    
                    </div> 
                    </div>
          
        </section>
    
    <section id="stores">
            <div class="storeimage">
            <img src="images/store.jpg" alt="insidestore" height="500" width="350">
            </div>
            <div class="storetext">
                <h1>Shop in Real Life</h1>
                <p>If you are curious about our products, visit our physical shops in Vilnius, where you can see our selection of plants, talk to the employees and sign up for a course.</p>  
                <button onclick="window.location.href = 'contacts.php';">Locations</button>
            </div>
    </section>
    
    <footer>
        <div class="footer">
    <?php echo '&copy' .date('Y') . '. The Noble Green';?>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-linkedin"></a>
        </div>
    
        </footer>
 </body>
</html>
