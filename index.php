<!doctype html>
<html lang="en">
  <head>
    <!-- Made by : Sawani Satish Bhonde, B-Tech-CSE_3088 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="images/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="bootstrap-4.1.0-dist/css/bootstrap.min.css"/>

    <!-- Libraries CSS Files -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="main.css">

    <title>MIT Sports</title>
  </head>
  <body>
   <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#start"><img src="images/logo2.png" width="100" height="40" alt="" title=""  /></img></a>
        
      </div>

	  

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#start">Home</a></li>

          <!-- <li><a href="#news">News</a></li> -->

          <li class="menu-has-children"><a href="#sports">Sports</a>
            <ul>
              <li><a href="sports/aquatics/aquatics.html">Aquatics</a></li>
              <li><a href="sports/athletics/athletics.html">Athletics</a></li> 
              <li><a href="sports/badminton/badminton.html">Badminton</a></li>
              <li><a href="sports/basketball/basketball.html">Basketball</a></li>
              <li><a href="sports/chess/chess.html">Chess</a></li>
              <li><a href="sports/cricket/cricket.html">Cricket</a></li>
              <li><a href="sports/e-sports/e_sports.html">E-Sports</a></li>
              <li><a href="sports/football/football.html">Football</a></li>
              <li><a href="sports/gym/gym.html">Gym</a></li>
              <li><a href="sports/hockey/hockey.html">Hockey</a></li>
              <li><a href="sports/lawnTennis/lawn_tennis.html">Lawn Tennis</a></li>
              <li><a href="sports/tt/tt.html">Table Tennis</a></li>
              <li><a href="call-to-action">Volleyball</a></li>
            </ul>
          </li>
          <li><a href="#about">About Us</a></li>
          

          </li>
          <li class="menu-has-children"><a href="#call-to-action">Register</a>
						<ul>
						<li><a href="nso/nso.php">Team</a></li>
						<li><a href="nso/nso1.php">Individual</a></li> 
						
						</ul>
					</li>
          
          <li><a href="#team">Contact Us</a></li>
          <li><a href="login.php">AdminLogin</a></li>
        </ul>
      </nav>
      </div>
    </header>
    <!--==========================
    Start Section
  ============================-->
  <section id="start" class="start-main">
    <div class="start-container">
      <h1 class="loading">Winning is not everything,<br>but the only thing</h1>
    </div>
  </section>

  <main id="main">
  <!--==========================
      News Section
    ============================-->
  <!-- <section id="news">
  	<div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">News</h3>
          <br>
      </div>

      <div class="row justify-content-center">
        <button class="accordion col-lg-8 col-md-8 col-sm-12">NSO Orientation</button>
    		<div class="panel col-lg-8 col-md-8 col-sm-12">
          <p class="panel-body-head">Venue:</p><p> Auditorium</p>
      		<p class="panel-body-head">Time:</p><p>26th July, 09:30 - 10:15 A.M.</p>
    		</div>

    		<button class="accordion col-lg-8 col-md-8 col-sm-12">Sports Activities</button>
    		<div class="panel col-lg-8 col-md-8 col-sm-12">
          <p class="panel-body-head">Venue:</p><p> Playground</p>
          <p class="panel-body-head">Time:</p><p>25th July, 17:00 - 19:00</p>
    		</div>
      </div>



  </div>
  </section> -->

    <!--==========================
      Sports Section
    ============================-->
  <section id="sports">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Sports</h3>
          <p class="section-description">Sports we play</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="sports-flters">
              <li data-filter=".filter-ball, .filter-racquet, .filter-water, .filter-others" class="filter-active">All</li>
              <li data-filter=".filter-ball">Ball</li>
              <li data-filter=".filter-racquet">Racquet</li>
              <li data-filter=".filter-water">Water</li>
              <li data-filter=".filter-others">Others</li>
            </ul>
            <br>
          </div>
        </div>

        <div class="row justify-content-center" id="sports-wrapper">

          <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-water">
            <a href="sports/aquatics/aquatics.html">
              <img src="images/aquatics/aquatics_home.png" alt="">
              <div class="details">
                <h4 style="text-align: center;">Aquatics</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-others">
            <a href="sports/athletics/athletics.html">
              <img src="images/athletics/athletics_home.jpg" alt="">
              <div class="details">
                <h4 style="text-align: center;">Athletics</h4>
              </div>
            </a>
          </div>

           <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-racquet">
            <a href="sports/badminton/badminton.html">
              <img src="images/badminton/badminton_home.jpg" alt="">
              <div class="details">
                <h4 style="text-align: center;">Badminton</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-ball">
            <a href="sports/basketball/basketball.html">
              <img id="basketballHome" src="images/basketball/basketball_home.png" alt="">
              <div class="details">
                <h4 style="text-align: center;">BasketBall</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-others">
            <a href="sports/chess/chess.html">
              <img id="cricketHome" src="images/chess/chess_intro.jpeg" alt="">
              <div class="details">
                <h4 style="text-align: center;">Chess</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-ball">
            <a href="sports/cricket/cricket.html">
              <img id="cricketHome" src="images/cricket/cr_home.jpg" alt="">
              <div class="details">
                <h4 style="text-align: center;">Cricket</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-others">
            <a href="sports/e-sports/e_sports.html">
              <img id="cricketHome" src="images/e-sports/e-sports_intro.jpg" alt="">
              <div class="details">
                <h4 style="text-align: center;">E-Sports</h4>
              </div>
            </a>
          </div>

           <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-ball">
            <a href="sports/football/football.html">
              <img src="images/football/football_home.jpg" alt="">
              <div class="details">
                <h4 style="text-align: center;">Football</h4>
              </div>
            </a>
          </div>

           <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-others">
            <a href="sports/gym/gym.html">
              <img src="images/gym/gym_home.jpg" alt="">
              <div class="details">
                <h4 style="text-align: center;">Gym</h4>
              </div>
            </a>
          </div>

           <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-ball">
            <a href="sports/hockey/hockey.html">
              <img id="hockeyHome" src="images/hockey/hockey_home.jpg" alt="">
              <div class="details">
                <h4 style="text-align: center;">Hockey</h4>
              </div>
            </a>
          </div>


          <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-racquet">
            <a href="sports/lawnTennis/lawn_tennis.html">
              <img src="images/tennis/tennis_home.jpg" alt="">
              <div class="details">
                <h4 style="text-align: center;">Lawn Tennis</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-racquet">
            <a href="sports/tt/tt.html">
              <img id="ttHome" src="images/tt/tt_home.jpeg" alt="">
              <div class="details">
                <h4 style="text-align: center;">Table Tennis</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-9 sports-item filter-ball">
            <a href="sports/volleyball/volleyball.html">
              <img src="images/volleyball/volleyball_home.png" alt="">
              <div class="details">
                <h4 style="text-align: center;">Volleyball</h4>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container justify-content-between">

          <div class="col-lg-5 content order-lg-1 order-2">
            <h2 class="title" style="text-align:center;">About Us</h2>
            <p>
              Welcome to MIT Aurangabad, where excellence meets athleticism! At MIT, we understand the pivotal role sports play in shaping well-rounded individuals. Our vibrant sports community thrives on passion, determination, and sportsmanship, making us stand out in the world of collegiate sports.



          </div>
          <div >
            <img src="images/ground.jpg" width="500" height="400">
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
    NSO Hours Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Register for Sport</h3>
            <p class="cta-text"></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="nso/nso.php">Team Sport</a>
            <a class="cta-btn align-middle" href="nso/nso1.php">Individual Sport</a>

          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">The Team</h3>
          <p class="section-description">The details of respective co-ordinators of each sport are found under sports.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/WhatsApp Image 2023-11-01 at 3.18.08 PM.jpeg" alt=""></div>
              <h4>Tushar Rile</h4>
              <span>Sports Chairman</span>
              <div class="social">
                <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/login.php"><i class="fa fa-facebook"></i></a>
                <a href="https://accounts.google.com/"><i class="fa fa-envelope"></i></a>
                <a href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/team/sports_officer.jpeg" alt=""></div>
              <h4>T.Satyanaryana</h4>
              <span>Sports Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-envelope"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div> -->

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/WhatsApp Image 2023-11-01 at 3.14.44 PM.jpeg" alt=""></div>
              <h4>Sawani Bhonde</h4>
              <span>Sports Secretary</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="https://accounts.google.com/"><i class="fa fa-envelope"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

        <!-- </div>
        <div class="row"> -->


          <div class=" col-lg-3 offset-md-0 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/WhatsApp Image 2023-11-01 at 3.21.32 PM.jpeg" alt=""></div>
              <h4>Shashank Vishwakarma</h4>
              <span>Web Coordinator</span>
              <div class="social">
                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://accounts.google.com/"><i class="fa fa-envelope"></i></a>
                <a href="https://www.linkedin.com/in"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/WhatsApp Image 2023-11-01 at 3.25.16 PM.jpeg" alt=""></div>
              <h4>Gauri Ghongate</h4>
              <span>Design Coordinator</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href="https://accounts.google.com/"><i class="fa fa-envelope"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

        <!-- </div> -->

      </div>
    </section><!-- #team -->


  </main>

  <!--==========================
    Footer
  ============================-->
  <footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-envelope"></i></a>

			</div>

			<div class="footer-left">
				<p>&copy; MIT Sports</p><br>
			</div>

		</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>

    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
