<?php
include ("header.php");
?>
<!---Navbar-->
		<nav class="navbar navbar-default" id="header">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle navbar-toggler pull-xs-right hidden-md-up" data-toggle="collapse" aria-expanded="false" data-target="#myNavbar">
						<span class="sr-only">Toggle Navigation</span>
						<div style="color: #fff;">Menu&nbsp;<i class="fa fa-bars"></i></div>
					</button>
					<a href="index.php" class="navbar-brand">Happy Birthday Moti</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-right navbar-nav" id="nav">
						<li><a href="index.php" style="margin: 10px !important;">Home</a></li>
						<li><a href="#gallery" style="margin: 10px !important;">Gallery</a></li>
					</ul>
				</div>
			</div>
		</nav>
<!--Body-->
<div class="container">
<div class="jumbotron">
	<h1>Happy Birthday Vidula</h1>
	<p>Each day is briliant gift to enjoy!!<br>
	Today is your birthday<br>
	Hope it's just the begining of a whole yearof your fabolous days waiting for you!!!!<br>
	Hope You Had A Great Birthday!!
	</p>
	<p style="font-size: 16px; text-align: right;float: right;">~&nbsp;Asim Fakhi</p>
</div>

	<div class="row">
		<div class="col-sm-12">
		<h1 class="page-header" id="gallery">Gallery</h1> 
		</div>
		
	</div>
</div>




<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Vidula</a></li>
    <li><a data-toggle="tab" href="#menu1">VJ Photography</a></li>
    <li><a data-toggle="tab" href="#menu2">College Friends</a></li>
    <li><a data-toggle="tab" href="#menu3">Childhood Friends</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Vidula</h3>
      <?PHP 
      $conn = mysqli_connect('mysql.hostinger.in', 'u379965482_asim', '9890749810', 'u379965482_vidu') or die("Error");

			$query = "SELECT * from gallery WHERE tabname='vidhula'";
					$run = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($run)){
						$image = $row['img'];
					?>
						<div class="col-sm-4">
						<a href="images/<?php echo $image; ?>"><img class="img-responsive img-thumbnail" src="images/<?php echo $image; ?>" style="height: 250px; width: 400px;"></a>
						</div>
				<?php
					}
					?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>VidulaJoshi Photography</h3>
      <?PHP
					$query = "SELECT * from gallery WHERE tabname='vjphoto'";
					$run = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($run)){
						$image = $row['img'];
					?>
						<div class="col-sm-4">
						<a href="images/<?php echo $image; ?>">
							<img class="img-responsive img-thumbnail" src="images/<?php echo $image; ?>" style="height: 250px; width: 400px;">
						</a>
						</div>
				<?php
					}
					?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>College Friends</h3>
      <?PHP
					$query = "SELECT * from gallery WHERE tabname='sr'";
					$run = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($run)){
						$image = $row['img'];
					?>
						<div class="col-sm-4">
						<a href="images/<?php echo $image; ?>">
							<img class="img-responsive img-thumbnail" src="images/<?php echo $image; ?>" style="height: 250px; width: 400px;">
						</a>
						</div>
				<?php
					}
					?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Childhood Friends</h3>
     <?PHP
					$query = "SELECT * from gallery WHERE tabname='jr'";
					$run = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($run)){
						$image = $row['img'];
					?>
						<div class="col-sm-4">
						<a href="images/<?php echo $image; ?>">
							<img class="img-responsive img-thumbnail" src="images/<?php echo $image; ?>" style="height: 250px; width: 400px;">
						</a>
						</div>
				<?php
					}
					?>
    </div>
  </div>
</div>



<!--footer-->
<footer>
	<div class="container" id="container_footer">
		<div class="row">
			<p id="copyright_text" class="col-sm-12">&copy; copyright 2017.&nbsp;&nbsp;&nbsp;designed and developed by <a href="asimfakhi.tk/">Asim Fakhi</a></p>
		</div>
	</div>
</footer>
</body>
</html>

