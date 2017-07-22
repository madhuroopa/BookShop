<?php session_start();?>


<html>

    
<head>
		<?php
			include("includes/head.inc.php");
		?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<center> <img src="images/bookshop.gif"  style="width:790px;height:100px;"></center>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Book Store';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								
								<br>		
								
<div class="container">
  <div id="myCarousel"  style="width:600px;height:400px;" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/fiction.jpg"  style="width:100%;">
      </div>

      <div class="item">
        <img src="images/sss.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/rrr.png"  style="width:100%;height:90%;">
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
</div>
								<object width="550" height="400">
								
								
								</object>
								<br><br>
								
							</div>
							
						</div>
						
					</div>
					
					<!-- start sidebar -->
					<div id="sidebar">
						<br>
						
							<?php
								include("includes/search.inc.php");
							?>
				
							
					</div>
					<!-- end sidebar -->
						<!-- end content -->
						
			
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			
</body>
</html>
