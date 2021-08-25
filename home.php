<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/home.css">
</head>
<body>


<nav>
  <div class="nav-center">
    <!-- nav header -->
    <div class="nav-header">
      <img src="resource/Site/dad.png" class="logo" alt="logo" >
      <button class="nav-toggle">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <!-- links -->
    <ul class="links">
      <li>
        <a href="index.php">Logout</a>
      </li>
      <li>
        <form action="home.php">
        <a><input type="submit" value="HOME" class="homeButton"></a>
        </form>
      </li>
      <li>
        <a href="elthon_land.html">Cayetano</a>
      </li>
      <li>
        <a href="brian_land.html">Galang</a>
      </li>
      <li>
        <a href="carlos_land.html">Gonzales</a>
      </li>
	  <li>
        <a href="patrick_land.html">Pasohil</a>
      </li>
	  <li>
        <a href="joan.html">Lovendino</a>
      </li>
	  <li>
        <a href="ilah_land.html">Zamora</a>
      </li>
    </ul>
    
    <!-- social media -->
    <ul class="social-icons">
      <li>
        <a href="https://www.facebook.com/CityCollegeOfAngeles/">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="https://www.twitter.com">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>
<div class="slideshow">
  <div class="slideshow-item">
    <img src="resource/Site/first.jpg" alt="">
    <div class="slideshow-item-text">
      <h5>Welcome <?php 
        if(((isset($_POST["login"])) && ($_POST["name"] != "Mr.")) xor  ((isset($_POST['signup'])) && ($_POST['eMail'] != 'nelsonjanperez@cca.edu.ph'))){
          if((isset($_POST["login"])) && ($_POST["name"] != "Mr.")){
            echo " Back<br>".$_POST['name']."!</h5>";
          }else if((isset($_POST['signup'])) && ($_POST['eMail'] != 'nelsonjanperez@cca.edu.ph')){
            echo "!<br></h5><h4>".$_POST['name']."</h4>";
          }
        }else{
          echo " To Our Page";
        }
      ?>
      <?php 
        if(((isset($_POST["login"])) && ($_POST["name"] == "Mr.")) xor  ((isset($_POST['signup'])) && ($_POST['eMail'] == 'nelsonjanperez@cca.edu.ph'))){
          echo "Engr. Perez</h5>"; } ?>
      <p>This page is about our personal informations. <br>It is made under the subject Web Programming 2 </p>
    </div>
  </div>
  <div class="slideshow-item">
    <img src="resource/Site/second.jpg" alt="">
    <div class="slideshow-item-text">
      <h5>Welcome <?php 
        if(((isset($_POST["login"])) && ($_POST["name"] != "Mr.")) xor  ((isset($_POST['signup'])) && ($_POST['eMail'] != 'nelsonjanperez@cca.edu.ph'))){
          if((isset($_POST["login"])) && ($_POST["name"] != "Mr.")){
            echo " Back<br>".$_POST['name']."!</h5>";
          }else if((isset($_POST['signup'])) && ($_POST['eMail'] != 'nelsonjanperez@cca.edu.ph')){
            echo "!<br></h5><h4>".$_POST['name']."</h4>";
          }
        }else{
          echo " To Our Page";
        }
      ?>
      <?php
        if(((isset($_POST["login"])) &&($_POST['name'] == 'Mr.')) xor  ((isset($_POST['signup'])) && ($_POST['eMail'] == 'nelsonjanperez@cca.edu.ph'))){
          echo "Engr. Perez</h5>"; } ?>
      <p>This page is about our personal informations. <br>It is made under the subject Web Programming 2 </p>
    </div>
  </div>
  <div class="slideshow-item">
    <img src="resource/site/Capture.PNG" alt="">
    <div class="slideshow-item-text">
      <h5>Welcome <?php 
        if(((isset($_POST["login"])) && ($_POST["name"] != "Mr.")) xor  ((isset($_POST['signup'])) && ($_POST['eMail'] != 'nelsonjanperez@cca.edu.ph'))){
          if((isset($_POST["login"])) && ($_POST["name"] != "Mr.")){
            echo " Back<br>".$_POST['name']."!</h5>";
          }else if((isset($_POST['signup'])) && ($_POST['eMail'] != 'nelsonjanperez@cca.edu.ph')){
            echo "!<br></h5><h4>".$_POST['name']."</h4>";
          }
        }else{
          echo " To Our Page";
        }
      ?>
      <?php
        if(((isset($_POST["login"])) &&($_POST['name'] == 'Mr.')) xor  ((isset($_POST['signup'])) && ($_POST['eMail'] == 'nelsonjanperez@cca.edu.ph'))){
          echo "Engr. Perez</h5>"; } ?>
      <p>This page is about our personal informations. <br>It is made under the subject Web Programming 2 </p>
  </div>
</div>
</div>
</body>
</html> 
