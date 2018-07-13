@extends('layout')

@section('contenido')
<a href="/layout"></a>
<form method="post" action="{{route('registrar')}}">
	{{csrf_field()}}
		<h4>
		Username
		</h4>
		<input type="text" name="name" placeholder="User">
		<br>
		<h4>
			Email
		</h4>
		<input type="email" name="email" placeholder="Example: user@gmail.com">
		<br>
		<h4>
			Password
		</h4>
		<input type="Password" name="password" placeholder="Password">
		<br>
		<h4>
			Confirm Password
		</h4>
		<input type="Password" name="password_confirmation" placeholder="Confirm Password">
		<br>
		<button type="submit">Complete Registration</button>
</form>
@endsection