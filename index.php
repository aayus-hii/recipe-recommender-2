<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>recipe:fsd</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    html {
  scroll-behavior: smooth;
}

body {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
     background:linear-gradient(to right,white,rgb(231, 193, 255) ); 
  }
  
  header {
     background: linear-gradient(to right,white,rgb(231, 193, 255) );  
    padding: 40px;
    display: flex;
    align-items: center;
  }
  .logo{
    float:left;
    width:200px;
  }
  
  h1 {
    font-size: 42px;
  }
  
  img {
    width: 150px;
    
   
  }

  .container{
    
    
    padding: 0 10px;
    margin: 5px;;
}

  .webimage{
        width:200px;
        
  }

  
  nav {
    float: right;
  }
  
  nav a {
    font-size:large;
    text-decoration: none;
    color: #000;
    padding: 0 10px;
    margin-left:15px;
  }

  nav a:hover{
    color:rgb(187, 91, 255);
  }
  .flex{
    display:felx;
}
.search-bar {
  width:100%;
  max-width:700px;
  background:(#000,0.2);
  display:flex;
  align-items:center;
  border-radius:20px;
  padding:10px 20px;

}

.fa-brands{
  padding:10px;
  font-size:45px;
}



  
  main {
    padding: 20px;
  }
  
  section {
    margin-bottom: 20px;
  }
  
  .button {
    display:block;
    margin:center;
    background-color: rgb(220, 163, 255) ;
    border-radius:12px;
    color:white;
    font-size: larger;
    padding: 10px 20px;
    text-align: center;
    display:inline-block;
    transition-duration:0.4s;
    cursor:pointer;
    align-self:center;
  }
  .button:hover {
    background-color: white;
    color:rgb(220, 163, 255);
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }

  .aboutdetails {
    margin-left:3%;
    margin-top:15%;
    
  }

  .images {
     width:45%;
    height:80%; 
    position:absolute;
   right:-300px;  
    
    bottom:0;

  }

  .images img {
    height:80% ;
    width:fit-content;
    position:absolute;
    bottom:0;
    transform: translateX(-50%);
    transition: bottom 1s, left 1s;

  }

  .recipes {
    align-items: center;
    text-align: center;
  }

  .containerfive {
    width:1400px;
    height:400px;
    align-items: center;
    position:relative;
    padding:10px;
    align-items: center;
    margin:auto;
  }

  .containerfive .box {
    text-align:center;
    align-items: center;
    float: left;
    margin:10px;
    
    width:250px;
    height:300px;
    border-color: #000 ;
    
    
  }
  .containerfour {
    width:1400px;
    height:400px;
    align-items: center;
    position:relative;
    padding:10px;
    align-items: center;
    margin:auto;
  }

  .containerfour .box {
    text-align:center;
    align-items: center;
    float: left;
    margin:10px;
    
    width:320px;
    height:300px;
    border-color: #000 ;
    
    
  }
  .interimage {
    width:250px;

  }

  .gotopbtn {
    font-size: 22px;
    position:fixed;
    line-height: 50px;;
    right:50px;
    
    bottom:40px;
    width:50px;
    height:50px;

    border-radius: 50%;
    background:rgb(187, 91, 255);
    box-shadow: 0 0 10px black;
    color:white;
    cursor:pointer;
    align-self: center;
}

  
  
    </style>
</head>
<body>
  <header>
    
    
    
    <div class="container">
        <img src="logo.jpg" class="logo" alt="logo"> 
        <nav class="flex items-center justify-between">
            <div class="left flex justify-right">
                </div>
                <div>
                      <a href="index.php">Home</a>
                      <a href="about.html"  >About Us</a>
                      <a href="#recipe">Recipes</a>
                      <a href="use.html" >How to Use</a>  
                      <a href="generate.html" >Generate Recipe</a>
                      <a href="#contact">Contact</a>
                      <a href="login.php"><i style="color: black;" class="fa-solid fa-user"></i></a>

                    <!-- <a style="float:right"> <form>
                      <input style="border-radius: 12px; color:rgb(231, 193, 255); border-color: white;" type="text" placeholder="search recipes" name="q">
                      <button style="border-radius: 12px; color:rgb(100, 26, 100); background-color: transparent; border-color: transparent;" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form></a> -->
                    
                </div>
                </div>
                
        </nav>
    </div>
  </header>

  <main>
    <button id="btnScrollToTop">
      <a class="gotopbtn" href="#"><i class="fa-solid fa-arrow-up"></i></a>
      </button>

        <div class="hero">
          <div class="aboutdetails">
          <section is="">
            <h1 style="font-size:40px;">Welcome to Ann's Recipe Book</h1>
            <p style="font-size: 25px;">Join the community of food lovers & discover <br> that Ann's Recipe Book is a great way to make it better.</p>
            <br>
            <a href="signup.html" class="button" >Get Started</a>
          </section>
          </div>
          <div class="images">
            <img src="purplebg.jpg" class="shape">
            <img src="cupcake.jpg" class="cupcake">
          </div>
        </div>
        <br><br><br><br><br><br><br>

        <div class="recipes">
          <section id="recipe">
            <h2>Browse Recipe Category</h2>
            <div  class="containerfive">
                <div style="font-size:25px;" class="box"><a href="https://downshiftology.com/recipes/acai-bowl/#wprm-recipe-container-33598" target="_blank"> <img src="breakfast.jpg" class="interimage"><br>Breakfast</a>
                </div>
                <div style="font-size: 25px;" class="box"> <a href="https://downshiftology.com/recipes/deviled-eggs/#wprm-recipe-container-33489" target="_blank"><img src="brunch.jpg" class="interimage"><br>Brunch</a>
              </div>
              <div style="font-size: 25px;" class="box"> <a href="https://downshiftology.com/recipes/zucchini-noodle-spaghetti-bolognese/#wprm-recipe-container-33194" target="_blank"><img src="lunch.jpg" class="interimage"><br>Lunch</a>
              </div>
              <div style="font-size: 25px;" class="box"> <a href="https://downshiftology.com/recipes/soy-garlic-ginger-chicken-wings/#wprm-recipe-container-39098" target="_blank"><img src="dinner.jpg" class="interimage"><br>Dinner</a>
              </div>
              <div style="font-size: 25px;" class="box"> <a href="https://downshiftology.com/recipes/raw-berry-vanilla-bean-cheesecake/#wprm-recipe-container-33452" target="_blank"><img src="dessert.jpg" class="interimage"><br>Dessert</a>
              </div>
            </div>
            <h2>Browse Recipe By Festivals</h2>
            <div class="containerfour">
              <div style="font-size:25px;" class="box"><a href="#" target="_blank"><img src="diwali.jpg" class="interimage"><br>Diwali </a></div>
              <div style="font-size:25px;" class="box"><a href="#" target="_blank"><img src="eid.jpg" class="interimage"><br>Eid </a></div>
              <div style="font-size:25px;" class="box"><a href="#" target="_blank"><img src="christmas.jpg" class="interimage"><br>Christmas </a></div>
              <div style="font-size:25px;" class="box"><a href="#" target="_blank"><img src="thanksgiving.jpg" class="interimage"><br>Thanksgiving</a></div>
            </div>
          </section>
        </div>
    
        <section id="contact">
          <h2>Contact Us</h2>
        
          <p>Phone No: 7275074395</p>
          <p>mail id: 
            <a href="aayushipatel172003@gmail.com">aayushipatel172003@gmail.com</a>
          </p>
          <p>Location: Pune</p>
          <a href="https://www.linkedin.com/in/aayushi-patel-46189b223" target="_blank"><span><i class="fa-brands fa-linkedin"></i></span></a>
          <a href="https://github.com/aayus-hii" target="_blank"> <span><i class="fa-brands fa-github"></i></span></a>
          <a href="https://instagram.com/_aayushi17?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><span><i class="fa-brands fa-instagram"></i></span></a>
        </section>
    <!-- <section id="about">
        <img style="float:right;" class="webimage" src="cupcake.jpg" alt="food">
      <h2>Food Tastes Better When You Eat It With Your Family</h2>
      <p style="text-align: justify;">(include text)</p>
    </section>

    <section id="dishes">
      <h2>Our Special Dishes</h2>
      <p>we provide fab dishes:)</p>
          
    </section> -->

   
  </main>

  <footer>
    <p style="text-align: center;">&copy Ann's recipe book 2023</p>
  </footer>


    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    