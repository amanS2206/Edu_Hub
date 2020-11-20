

<?php
session_start();

?>



<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- fonticons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap CSS -->
  <title>Edu_Hub</title>
</head>

<body onload="stop()" style="background-color: #b8daff">
<div  id="preloaded">

</div>


<div class="container-fluid" id="main">
  <nav id="nav1" class="navbar navbar-expand-lg    ">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img id="logo-img" src="images/pp.jpeg" class="img-fluid"></a>


      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar" style="background-color: #1b1a1b;border: 2px solid crimson">
        <span class="navbar-toggler-icon" style="color: black;background-color: white"></span>
      </button>



      <div class="collapse navbar-collapse" id="navbar">

        <ul class="navbar-nav text-center ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="HTML/firstYear/1st_year.html">Ist Year</a></li>

                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">CS</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="secondyear/secondYear.html">2 year</a></li>
                            <li><a class="dropdown-item" href="HTML/CS%20Branch/3rd_year.html">3 year</a></li>
                            <li><a class="dropdown-item" href="HTML/CS%20Branch/4th_year.html">4 year</a></li>



                        </ul>
                    </li>
                </ul>
            </li>
































          <li class="nav-item">

                <?php
                if($_SESSION['loggedin']){

                    echo " <a href='php/login.php' target='_blank' style='color: #c69500' id='loginButton'class='nav-link' >".$_SESSION['username']."</a>";
                }
                else{
                    echo " <a href='php/login.php' id='loginButton' target='_blank' class='nav-link' >Login</a>";

                }
                ?>

          </li>
          <li class="nav-item">
              <?php
              if($_SESSION['loggedin']){
               echo '  <a href="php/logout.php" id="signupButton" class="nav-link" >Logout</a>';
              }
              else{
                  echo ' <a href="php/signup.php" id="loginButto"class="nav-link" >Signup</a>';
              }
              ?>




          </li>
        </ul>
      </div>




  </nav>




   <!----------------------------------------------------------------- login modal -------------------------------------------------------------------->
  

  <!------------------------------------------------------------------- login modal ----------------------------------------------------------------------->
 
 
 
 
 
 
 <!--------------------------------------------------------------------- Sign UP modal --------------------------------------------------------------------->

 

  <!--------------------------------------------------------------------- Sign UP modal --------------------------------------------------------------------->
 

  <div class="container" style="padding: 20px;margin-bottom: 20px">
    <h1 id="h1he"></h1>

  </div>

</div>
<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">

          <div class="carousel-item active">
              <a href="https://www.youtube.com/watch?v=YnJNAXIFJ2E" target="_blank">
              <img src="images/coding.jpg" class="cra" alt="...">
              </a>
          </div>
        <div class="carousel-item ">
            <a href="https://www.youtube.com/watch?v=YnJNAXIFJ2E" target="_blank">
          <img src="images/cs.jpg" class="cra" alt="...">
            </a>
        </div>

        <div class="carousel-item">
            <a href="https://interestingengineering.com/10-best-engineering-youtube-channels" target="_blank">
                <img src="images/engineering_youtube_channel-1_md.jpg" class="cra" alt="...">
            </a>
        </div>


      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators"  style="color: #1b1a1b;background-color: #1b1a1b;opacity: 0.5" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only" >Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators"   style="color: #1b1a1b;background-color: #1b1a1b;opacity: 0.5" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


  </div>

  <!-- Edu.hub video --->


  <div id="vide" class="container">

    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="videos/edu%20‑%20Made%20with%20FlexClip%20(2).mp4"></iframe>
    </div>


  </div>

  <!--------------------------------------------------card----------------------------------------------->
  <br>
  <br>
  <div class="container">
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <div class="row">
        <div class="col-md-4">
          <img src="images/vivekananda-11-1515652951.jpg" style="height: 300px;width: 100%" class="img-fluid">
        </div>
        <div class="col-md-8" style="background-color: skyblue">
          <br>
          <br>
          <br>
          <br>

          <blockquote style="opacity: inherit; font-size: 20px;font-weight: bold; font-style: oblique;font-family: Georgia, 'Times New Roman', Times, serif; color: red;"><q><i>"Take up one idea. Make that one idea your life; dream of it; think of it; live on that idea.
                Let the brain, the body, muscles, nerves, every part of your body be full of that idea, and just leave
                every other idea alone. This is the way to success, and this is the way great spiritual giants are
                produced."</i></q></blockquote>


        </div>



      </div>
    </div>
    <br>
    <br>

    <div class="card" style="box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <div class="row">
        <div class="col-md-4">
          <img src="images/download.jpeg" style="height: 300px;width: 100%" class="img-fluid">
        </div>
        <div class="col-md-8" style="background-color: #8fd19e">

          <br>
          <br>
          <br>

          <blockquote style="opacity: inherit; font-size: 20px;font-weight: bold; font-style: oblique;font-family: Georgia, 'Times New Roman', Times, serif; color: blue;">
            <p> <i>"If you fail, never give up because F.A.I.L. means “First Attempt In Learning”.
              End is not the end, if fact E.N.D. means “Effort Never Dies.” If you get No as an
              answer, remember N.O. means “Next Opportunity”, So let’s be positive.”
            </i></p></blockquote>


          </blockquote>

        </div>



      </div>
    </div>




  </div>



  <!-------------------------------------------------------------------footer------------------------------------------------->
  <!-- Footer -->
  <footer class="page-footer font-small unique-color-dark">

    <div class="footer-social-links">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h5 class="mb-0" style="color:white;">Get connected with us on social networks!</h5>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <div class="social-media">
              <ul>
                <!-- Facebook -->
                <li><a href=""><i class="fab fa-facebook-f white-text mr-4"></i></a></li>
                <!-- Twitter -->
                <li><a href=""><i class="fab fa-twitter white-text mr-4"></i></a></li>
                <!-- Google +-->
                <li><a href=""><i class="fab fa-google-plus-g white-text mr-4"></i></a></li>
                <!--Linkedin -->
                <li><a href=""><i class="fab fa-linkedin-in white-text mr-4"></i></a></li>
                <!--Instagram-->
                <li><a href=""><i class="fab fa-instagram white-text"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->

    <div class="new-footer">
      <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold">Edu_Hub</h6>

            <p style="color: yellow;size: 40px; font-variant: small-caps;">An awesome Hub for Learning and Rising</p>
                  

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="text-decoration: none;">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Products</h6>

            <div class="products">
              <p>
                <a href="#">First Year</a>
              </p>
              <p>
                <a href="secondyear/secondYear.html">Second Year</a>
              </p>
              <p>
                <a href="HTML/CS%20Branch/3rd_year.html">Third Year</a>
              </p>
              <p>
                <a href="HTML/CS%20Branch/4th_year.html">Fourth Year</a>
              </p>
            </div>


          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>

            <div class="useful-links">
              <p>
                <a href="#">Your Account</a>
              </p>
              <p>
                <a href="#">Previous Year Papers</a>
              </p>
              <p>
                <a href="#">Practicals</a>
              </p>
              <p>
                <a href="about us.html">Our Team</a>
              </p>


            </div>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Contact</h6>

            <p>
              <i class="fas fa-home mr-3"></i> Allipur , Allahabad</p>
            <p>
              <i class="fas fa-envelope mr-3"></i>edu_hub@gmail.com</p>
            <p>
              <i class="fas fa-phone mr-3"></i> 64946645312</p>
            <p>
              <i class="fas fa-print mr-3"></i> 5413513535</p>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>

    </div>




    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color: white;  background-color: black ">© 2020 Copyright:
      Edu_Hub

    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



  <!------------------------------------------------------------------ footer------------------------------------------------>
  
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

    <script>
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });


            return false;
        });



var a= document.getElementById('preloaded')
        function stop(){

        }



        // this for auto writing:

        var text= document.getElementById('h1he')
        function write_text(){
    const  type="Edu_hub : Get Ready to Learn!";

    let i=0;
    const typeing= ()=> {
        if (i < type.length) {
            text.innerHTML += type.charAt(i)

            i++
            setTimeout(typeing,300)
        }
    }
typeing()
}
write_text()
















       $('#loginButton').click(function() {
        $('#loginModal').modal('show');
      });

      $('#signupButton').click(function(){
        $('#signupModal').modal('show');
      });

    </script>
</body>

</html>