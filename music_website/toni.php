<!--<?php
file_get_contents("https://www.youtube.com/results?search_query='".$_GET["song"]."'");

?>-->
<html>
    <head>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <style>
             .para{
         height: 650px; 
        background: url(music/alphacolor-13-172879.jpg);
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
        }
            body{
                background-color: black;
            }
            
            .container{
                margin-top: 60px;
                width:1000px;
                margin-bottom: 60px;
                color:white;
            }
            #ton{
                padding-top:  30px;
            }
            #life_text{
                width:600px;
                margin-top: 30px;
                float: right;
            }
            #audio{
                margin-bottom: 20px;
            }
            .jumbotron{
                background: url(music/alphacolor-13-181701.jpg);
                height:550px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
                text-align: center;
            }
            #jumbo{
               
                opacity:1; !important
                color:black; !important
            }
            .footer{
                height:100px;
                color: white;
            }
            #foot{
                margin: 0px auto;
                width:920px;
            }
             .overlay{
                opacity: 0;
                width:180px;
                height: 180px;
                margin-top: 72px;
                position: absolute;
                top: 0;
              bottom: 0;
              left: 17px;
              right: 0;
                
            }
            .overlay:hover{
                opacity: 1;
                
            }
            .over_text{
                position: absolute;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                
            }
            
        </style>
    </head>
    <body>
        
                <nav class="navbar navbar-toggleable-md navbar-light
                    fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand text-white" href="#">Music</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="music_web.php" >Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        
        <div class="parallex para"></div>
        
        <div class="container">
            <h2>My Life is a Movie</h2>
            <img src="music/toni.jpg" id="ton">
             <div class="overlay">
                        <div class="over_text"><img src="music/play2.png" id="play" style="height:30px;widthL30px"></div>
                    </div>
            <div id="life_text">
                <audio controls id="audio">
  <source src="music/05%20The%20Chainsmokers%20-%20Dont%20Let%20Me%20Down%20(feat.%20Daya).mp3" type="audio/mpeg">
</audio> 
            <p>The new single "Life is a Movie" by ToniSteelz raises the bar, true to her roots she covers uncharted territory with her unique delivery. People are looking for that sound that encompasses all the elements of conscious hip hop, the delivery is spot on and takes the genre to another level using original guitar and backing vocals to create a flawless orchastration.</p></div>
        </div>
        
      <div class="jumbotron">
          <div id="jumbo">
          <h2>Music is Life!!</h2>
          <p>And I thought about how many people have loved those songs. And how many people got through a lot of bad times because of those songs. And how many people enjoyed good times with those songs. And how much those songs really mean. I think it would be great to have written one of those songs. I bet if I wrote one of them, I would be very proud. I hope the people who wrote those songs are happy. I hope they feel it's enough. I really do because they've made me happy. And I'm only one person</p>
          </div>
        </div>
        
        
        <div class="footer">
            <p id="foot">
Copyright
© NoiseTrade 2018

    About Blog   | Advertise Team Legal Privacy | Login Signup Support | A Member of Townsquare Music 

</p>
        </div>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="jquery-ui/jquery-ui.js"></script>
        
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        <script>
            
             $(".overlay").hover(function(){
                $(".overlay").css("opacity","1");
                 $("#ton").css("opacity","0.7");
                
            },function(){
                  $(".overlay").css("opacity","0"); $("#ton").css("opacity","1");

            });
          
            
            
              document.getElementById("play").onclick = function() {
              
              if (document.getElementById("audio").paused) {
              
                document.getElementById("audio").play();
                 
                  
              } else {
                  
                document.getElementById("audio").pause();
         
                  
              }
              
              
          }
            
                      $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 600) { // check if user scrolled more than 50 from top of the browser window
          $(".fixed-top").css("background-color", "black"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
            
        </script>
    </body>
</html>