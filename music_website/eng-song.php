<html>
    <head>
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <style>
        .carousel img{
            height:670px;
            }
            .container{
                margin-top: 40px;
            }
            .box{
                float: left;
                margin-right: 30px;
            }
            .box img{
                margin-bottom: 20px;
                
            }
            #album{
                margin-bottom: 30px;
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
        
       
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="music/austin-neill-247047.jpg" alt="First slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="music/gabriel-gurrola-125336.jpg" alt="Second slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="music/marcela-laskoski-118684.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          
        
        <div class="container">
            <h1 id="album">Albums</h1>
            <div class="box">
                <a href="toni.php">
                <img src="music/toni.jpg" class="img">
                </a>
                <h5>ToniSteelz</h5>
                <p>My Life ia s movie</p>
            </div>
            <div class="box">
                <img src="music/frank.jpg" class="img">
                 
                <h5>Frank viele</h5>
                <p>Frank Viele Sampler</p>
            </div>
            <div class="box">
                <img src="music/van.jpg" class="img">
                <h5>Van William</h5>
                <p>The Revolution EP</p>
            </div>
            <div class="box">
                <img src="music/sons.jpg" class="img">
                 
                <h5>Sons of Telemon</h5>
                <p>Comfort and Joy</p>
            </div>
            <div class="box">
                <img src="music/dani.jpg" class="img">
                <h5>Dani Miche</h5>
                <p>Christmas is Here</p>
            </div>
             <div class="box">
                <img src="music/lord.jpg" class="img">
                <h5>Dani Miche</h5>
                <p>Christmas is Here</p>
            </div>
             <div class="box">
                <img src="music/chris.jpg"  class="img">
                <h5>Dani Miche</h5>
                <p>Christmas is Here</p>
            </div>
             <div class="box">
                <img src="music/gray.jpg" class="img">
                <h5>Dani Miche</h5>
                <p>Christmas is Here</p>
            </div>
                 <div class="box">
                <img src="music/grey.jpg" class="img">
                <h5>Dani Miche</h5>
                <p>Christmas is Here</p>
            </div>      
               <div class="box">
                <img src="music/noble.jpg" class="img">
                <h5>Dani Miche</h5>
                <p>Christmas is Here</p>
            </div>

        </div>
        
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        <script>
            $(".img").hover(function(){
                $(this).css("opacity","0.7");
                
            },function(){
                  $(this).css("opacity","1");
            });
            
            
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