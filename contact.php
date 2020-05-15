<!DOCTYPE html>
<html lang="en">
<head>
	<title>PRP Car Rental</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html { 
  background-color: black;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.row {margin: 0 -5px;
  height: 300px;}
@media screen and (max-width: 800px) {
  .column {
    width: 100%;
   
    display: block;
    margin-bottom: -20px;
  }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  background-color: #f1f1f1;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

}
.flip-card {
  background-color: transparent;
  width: 320px;
  height: 250px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: transparent;
  color: black;
}

.flip-card-back {
  background-color: transparent;
  color: #9C8A78;
  transform: rotateY(180deg);
}
</style>
</head>
<body class="ex1">

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find Your Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Mahindra - Renault - Hyundai</h3>
			</section>
	</section>


	<section class="search">
		
	
    
    <div class = "row" align="center" style="padding-top:50px">
    
    <div class="column">
    <div class="card">
    <div class="flip-card" >
    <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="./img/pradeep.jpg" alt="Pradeep" style="padding-top:5px;width:220px;height:240px;">
    </div>
    <div class="flip-card-back">
      <h1>Pradeep</h1> 
      <p>Mobile: <b>7845104680</b></p>
      <p>Email: <b>pradeepkps19@gmail.com</b></p>
      
    </div>
    </div>
    </div>
  </div>
</div>

		
			
			
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section>


  <?php
			include 'footer.php';
		?>

	
</body>
</html>