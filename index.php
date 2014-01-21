<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Humble Bundle Price Charts</title>
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.highcharts.com/stock/highstock.js"></script>
	<script src="http://code.highcharts.com/stock/modules/exporting.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>Humble Bundle Price Charts</b></a>
        </div>
      </div>
    </div>


	
	
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<h1>Average Price Overview.</h1> 
				<h3>This charts automatically pulls the average price for every bundle every 5 minutes and stores it in a database.</h3>
			</div>
		</div><!-- /row -->
		<?php
		include('graph.php');
		?>
		</div><!-- /row -->
	</div><!-- /container -->

	<div class="container">
		<hr>
		<p class="centered">Created by Philipp Thiele & Jan Werder</p>
	</div><!-- /container -->
	

    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
