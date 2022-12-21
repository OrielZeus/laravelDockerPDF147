<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
</head>
<body>
	<h1>About</h1>
	Bienvenido {{ $nombre ?? "Invitado" }}
	<nav>
		<ul>
			<li>
				<a href="{{route('view_home')}}">Home</a>
			</li>
			<li>
				<a href="{{route('about')}}">About</a>
			</li>
			<li>
				<a href="{{route('portfolio')}}">Portfolio</a>
			</li>
			<li>
				<a href="{{route('contact')}}">Contact</a>
			</li>
		</ul>
	</nav>
</body>
</html>