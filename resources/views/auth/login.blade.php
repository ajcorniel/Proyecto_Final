@extends('layout')

@section('contenido')
<form method="post" action="{{route('iniciarsesion')}}">
	{{csrf_field()}}
	<h4>
		Email
	</h4>
	<input type="email" name="email" placeholder="email">
	<br>
	<h4>
		password
	</h4>
	<input type="password" name="password">
	<button type="submit">Login</button>
</form>
@endsection