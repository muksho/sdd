<!--h1 style="text-align: center;">Heading</h1-->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: 18px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">SDD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if ($pageid==1){echo "class=active";}?> ><a href="index.php">Home</a></li>
        <li <?php if ($pageid==2){echo "class=active";}?> ><a href="about-us.php">About Us</a></li>
        <li <?php if ($pageid==3){echo "class=active";}?> ><a href="traning-program.php">Traning Program</a></li>
        <li <?php if ($pageid==4){echo "class=active";}?> ><a href="photos.php">Photos</a></li>
        <li <?php if ($pageid==5){echo "class=active";}?> ><a href="videos.php">Videos</a></li>
        <li <?php if ($pageid==6){echo "class=active";}?> ><a href="media.php">Media</a></li>
        <li <?php if ($pageid==7){echo "class=active";}?> ><a href="registration.php">Registration</a></li>
        <li <?php if ($pageid==8){echo "class=active";}?> ><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="padding: 25px;"></div>