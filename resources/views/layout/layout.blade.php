<!DOCTYPE html>
<html>
<head>
	<title>Judul</title>
	<link rel="stylesheet" type="text/css" href='{{ url("/css/materialize.min.css") }}'>
	<link rel="stylesheet" type="text/css" href='{{ url("/iconfont/material-icons.css") }}'>
	<script type="text/javascript" src='{{ url("/js/jquery-3.3.1.min.js") }}'></script>
	<script type="text/javascript" src='{{ url("/js/materialize.min.js") }}'></script>
</head>
<body class='grey lighten-2' style='padding-bottom: 64px'>
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">Rusman Wahab</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#">Home</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</div>
		</nav>
	</div>
	@yield('isi')
</body>
</html>