<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/codeCorrection.css">
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
      <a class="navbar-brand" href="log.php">Club SSTC</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Q&A.php">Q & A</a></li>
        <li class="active"><a href="codeCorrection.php">Code Correction</a></li>
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

<div class="container top-space">
  <p style="font-size: 25px; color: Grey;"><strong>Get your code corrected</strong></p>
  <hr style="margin:5px 0px 5px 0px; border-top:2px solid #eee">
  <form action="phpcodes/action_page.php" method="post" id="usrform">
  <div class="row">

    <div class="col-md-4">
      <p class="styled-cat">Recently asked Questions</p>
    </div>
    <div class="col-md-4">
      <marquee direction="up" height="250" scrollamount="3" onmouseover="stop();" onmouseout="start();">
        <!--php code starts-->
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "final";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Title FROM questions";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<li><a href=\"#\">" . $row["Title"] . "<a></li>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <!--php code ends-->
        <!--
        <li><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Sample Notice 1</a></li>
        <li><a href="#section3">Sample Notice 2</a></li>
        <li><a href="#section3">Sample Notice 3</a></li>
        -->
      </marquee>
    </div>
  </div>
  <hr style="border-top:2px solid #eee">
  <div class="row">
    <div class="col-md-3 between-space">
      <p class="styled-cat">Post your code</p>
      <select name="language">
        <option value="select">Language-Select</option>
        <option value="c">C</option>
        <option value="c++">C++</option>
        <option value="java">Java</option>
        <option value="python">Python</option>
      </select>
    </div>
    <div class="col-md-4 between-space2">
      <select name="problemtype">
        <option value="both">issue with</option>
        <option value="algorithm">Algorithm</option>
        <option value="syntax">Syntax</option>
      </select>

    </div>
  </div>
  <div class="row">
    <div class="col-md-4 between-space">
      <textarea rows="3" cols="60" form="usrform" name="title" placeholder="Short question description..."></textarea>
      <textarea rows="10" cols="60" form="usrform" name="usercode" placeholder="Put your code here..."></textarea>
    </div>
  </div>
  <input type="submit">
  <!--<input type="submit" value="Open in Compiler">-->
</form>

</div>



<!--
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
-->
</body>
</html>
