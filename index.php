<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AyurAhar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">
    </head>
    <style>
        p{
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        font-size: 20px;
    }
   </style>
    <body>
        
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span></span>
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>

            <div class = "head-bottom">
                <h2>AyurAhar</h2>
                <p>Ayurveda places great emphasis on prevention and encourages the maintenance of health through close attention to balance in one’s life, right thinking, diet, lifestyle and the use of herbs. Knowledge of Ayurveda enables one to understand how to create this balance of body, mind and consciousness according to one’s own individual constitution and how to make lifestyle changes to bring about and maintain this balance.
                <img src = "img1.png">
                <p>Ayurveda identifies three basic types of energy or functional principles that are present in everyone and everything. Since there are no single words in English that convey these concepts, we use the original Sanskrit words vata, pitta and kapha. These principles can be related to the basic biology of the body.</p>
                <button type="button" onclick="loadDoc()">Know More</button>

<p id="demo"></p>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "index.txt", true);
  xhttp.send();
}
</script>

                <a href="quiz2.html"><button type = "button" class = "head-btn">ATTEMPT QUIZ</button></a>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>
            <ul class = "navbar">
                <li><a href = "bodytypes.html">Doshas</a></li>
                <li><a href = "vata.html">Vata Dosha</a></li>
                <li><a href = "pitta.html">Pitta Dosha</a></li>
                <li><a href = "kapha.html">Kapha Dosha</a></li>
                <li><a href = "ayurvedicdiet.html">Dosha Imbalance</a></li>
                <li><a href = "mealplan.html">Meal Plan</a></li>
                <li><a href = "yoga.html">Yoga and Meditation</a></li>
                
            </ul>
            
            <a href="logout.php"><button type="button" class="head-btn">Log out</button></a>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
                <!-- body content  -->
        <section class = "facts sec-width" id = "facts">
            <div class = "title">
                <h1>Having A Glimpse</h1>
            </div>
            <p id = "one">
            The definition of Ayurveda is the dynamic state of balance between mind, body and environment.
            Our natural constitution, or the qualities with which we are born, is called prakriti.
            This constitution is formed by the subtle qualities of the five elements: earth, water, fire, air and ether or space. According to Ayurveda, each person is influenced more by certain qualities than others. The proportions of the elements are classified in three 'doshas':
            <br>
            <br> 
            Vata dosha, in which the elements of air and space are dominant
            <br>
            Pitta dosha, in which the elements of fire and water are dominant
            <br>
            Kapha dosha, in which the elements of earth and water are dominant
            <br>
            Ayurveda says that every disease is the result of an imbalance in one or more of the doshas and focusses on restoring the balance. If we understand the properties of our own constitution, we will be able to do the right thing to keep ourselves balanced.
           </p>
            
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>AyurAhar offers complete health and wellness solutions under one roof.Our website focuses on the Ayurveda,Yoga and Naturopathy.</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#">Ayurveda Experience</a>
                    
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +84545 37534 48
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            sys@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="script.js"></script>
    </body>
</html>
