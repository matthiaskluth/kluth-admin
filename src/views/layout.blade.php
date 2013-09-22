<!DOCTYPE html>
<html lang="de">
<head>
	<title>Adminoberfläche</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Cafe Fleischlos</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="#">Stammdaten</a></li>
		      <li><a href="#">Presse</a></li>
		      <li><a href="#">Karten</a></li>
		      <li><a href="#">Kontaktanfragen</a></li>
		      <li><a href="#">Gästebuch</a></li>
		      <li><a href="#">Events</a></li>
		      <li><a href="#">Alben</a></li>
		      <li><a href="#">Texte</a></li>
		    </ul>
	    </div>
	</nav>
	<div class="container starter-template">
		<h1>@yield('page-title')</h1>
		@yield('main')
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>