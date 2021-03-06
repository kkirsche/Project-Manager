<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Project Manager">
<meta name="author" content="Kevin Kirsche">
<link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
<title>Dashboard | Project Manager</title>
<!-- Bootstrap core CSS -->
 {{ HTML::style('css/bootstrap.css') }}
<!-- Custom styles for this template -->
 {{ HTML::style('css/theme.css') }}
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<header>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="{{ URL::asset('img/logo.png') }}"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
			        	<li class="active"><a href="#">Home</a></li>
			        	<li><a href="#about">About</a></li>
			        	<li><a href="#contact">Contact</a></li>
			      	</ul>
				</div>
				<!--/.navbar-collapse -->
			</div>
		</div>
	</header>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1>Hello, world!</h1>
		<p>
			This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
		</p>
		<p>
			<a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a>
		</p>
	</div>
</div>
<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-4">
			<h2>Heading</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn btn-default" href="#" role="button">View details &raquo;</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>Heading</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn btn-default" href="#" role="button">View details &raquo;</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>Heading</h2>
			<p>
				Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
			</p>
			<p>
				<a class="btn btn-default" href="#" role="button">View details &raquo;</a>
			</p>
		</div>
	</div>
	<hr>
	<footer>
	<p>
		&copy; Company 2014
	</p>
	</footer>
</div>
<!-- /container -->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
 {{ HTML::script('js/jquery-1.11.1.min.js') }} {{ HTML::script('js/bootstrap.js') }};
</body>
</html>