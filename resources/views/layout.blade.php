<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
	background: url(https://i.kym-cdn.com/entries/icons/mobile/000/015/848/465f34c9f38e15a7d8639de9b674438c.jpg);
	background-size: cover;
}
		nav {
position : absolute;
left : 0;
width : 100%;
background : url(http://i.imgur.com/kSryZ.png);
}
nav ul {
margin : 0 auto;
width : 940px;
list-style : none;
}
nav ul li {
float : left;
}
nav ul li a {
display : block;
margin-right : 20px;
width : 140px;
font-size : 14px;
line-height : 44px;
text-align : center;
text-decoration : none;
color : #ccc;
}
nav ul li a:hover {
color : #fff;
}
nav ul li.selected a {
color : #fff;
}
	</style>
	<title>Meme finder</title>
</head>
<body>
	<nav>
		<ul class="menu">
			<li><a href="{{route('home')}}">Home</a></li>
			@if( !auth()->check())
			<li><a href="{{route('registrarse')}}">Sing In</a></li>
			<li><a href="{{route('login')}}">Login</a></li>
			@endif
			<li><a href="{{route('contact')}}">Contacto</a></li>
			<li><a href="{{route('help')}}">Ayuda</a></li>
			<li><a href="{{route('vistaadicional')}}">Memes</a></li>
			@if( auth()->check())
			<li><a href="{{route('cerrarsesion')}}">Logout</a></li>
			@endif
		</ul>
	</nav>
	<br>
	<br>
	<br>
	<br>
	@if( auth()->check())
	<h1>{{ auth()->user()->name}}</h1>
	@else
	<h1>Guest</h1>
	@endif

	@yield('contenido')

	@yield('abajo')


</body>
</html>