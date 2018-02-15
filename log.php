<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    /* additional */
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Club SSTC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=><a href="Q&A.php">Q & A</a></li>
        <li><a href="codeCorrection.php">Code Correction</a></li>
        <li><a href="department.html">Departments</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">

      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/ssgi.jpg" alt="ssgi" style="width:100%;">
      </div>
    </div>
</div>

<!--common ends-->

<br>
<p class="custom-font"><strong style="color:black;">     UPCOMING EVENTS     </strong></p>
<div class="containter" style="margin: 20px";background-color="red";>
<a href="http://www.samvid.org.in">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/r33.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="images/r11.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="images/r2.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</a>
</div>

<p class="custom-font"><strong style="color:black;">UPCOMING COMPETETION</strong></p>
<div class="container-fluid">
  <div class="row content">


    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
          <a href="https://www.hackerearth.com/challenge/hiring/equal-experts-hiring-challenge/">
            <h3>Equal Experts Hiring Challenge</h3>
            <p class="contests-start-date">start-date</p>
            <p>16 Feb 2018 18:00+05:30</p>
            <br>
            <p class="contests-end-date">end-date</p>
            <p>18 Feb 2018 23:00+05:30</p>
          </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
          <a href="https://www.codechef.com/COOK91">
            <h3>February cook-off 2018</h3>
            <br>
            <p class="contests-start-date">start-date</p>
            <p>18 Feb 2018 21:30+05:30</p>
            <br>
            <p class="contests-end-date">end-date</p>
            <p>19 Feb 2018 00:00+05:30</p>
          </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
          <a href="https://www.topcoder.com">
            <h3>SRM 730</h3>
            <br>
            <p class="contests-start-date">start-date</p>
            <p>20 Feb 2018 17:30+05:30</p>
            <br>
            <p class="contests-end-date">end-date</p>
            <p>20 Feb 2018 19:30+05:30</p>
          </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
          <a href="https://www.hackerearth.com/sprints/international-women-hackathon-2018/">
            <h3>International Women's Hackathon 2018</h3>
            <p class="contests-start-date">start-date</p>
            <p>20 Feb 2018 22:30+05:30</p>
            <br>
            <p class="contests-end-date">end-date</p>
            <p>9 Mar 2018 13:25+05:30</p>
          </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
          <a href="https://www.hackerearth.com/challenge/college/recursion-junior-challenge-21/">
            <h3>RECode 2.3</h3>
            <br>
            <p class="contests-start-date">start-date</p>
            <p>21 Feb 2018 21:30+05:30</p>
            <br>
            <p class="contests-end-date">end-date</p>
            <p>22 Feb 2018 00:30+05:30</p>
          </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
          <a href="https://www.codechef.com/LTIME57/">
            <h3>February Lunchtime 2018</h3>
            <p class="contests-start-date">start-date</p>
            <p>24 Feb 2018 19:30+05:30</p>
            <br>
            <p class="contests-end-date">end-date</p>
            <p>24 Feb 2018 22:30+05:30</p>
          </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
        </div>
        <div class="col-sm-4">
        </div>
      </div>
    </div>
    <div class="col-sm-3 sidenav">
      <h2>Notice</h2>
      <ul class="nav nav-pills nav-stacked">
      <marquee direction="up" height="250" scrollamount="3" onmouseover="stop();" onmouseout="start();">

        <li><a href="img/r1.pdf">attendence Notice </a></li>
        <li><a href="img/r2.pdf">Download Brochure</a></li>
        <li><a href="img/r3.pdf">ct detail Notice </a></li>
        <li><a href="img/r4.pdf">samvid Notice </a></li>
        <li><a href="img/r5.pdf">flashmob Notice </a></li>
        <li><a href="img/r6.pdf">fee Notice </a></li>
        <li><a href="img/r3.pdf">result Notice </a></li>
        <li><a href="img/r4.pdf">collage timming Notice </a></li>

      </marquee>
      </ul>
      <a href="http://sstc.ac.in/">
        <img src="images/shankara.jpg" alt="notice-image">
      </a>
      <br>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="background-color:grey";>
  <img src="images/r10.png" alt="logo" align="right">

  <a href="https://www.facebook.com/www.rohansinha"><img src="images/r12.png" alt="logo" align="left"></a>
  <a href="https://www.linkedin.com/in/rohan-sinha-04186412a/"><img src="images/r14.png" alt="logo" align="left"></a>



<a href="https://www.instagram.com/engineer_rs/"><img src="images/r13.jpg" alt="logo" align="left"></a>

  <p>DEVELOPED BY TEAM RSVY FOR HACKATHON 2K18</p>
</footer>

</body>
</html>
