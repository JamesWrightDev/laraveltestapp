@extends('layouts.master')
@section('content')
	<div class="col-md-8">
		<h1>Sign In</h1>
		<form method="POST" action="/login">
			{{csrf_field()}}
			<div class="form-group">
				<label for="email">Email:</label>
				<input required class="form-control" type="email" id="email"	name="email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input required class="form-control" type="password" id="password" name="password">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Log In</button>
			</div>
		 @include('layouts.errors')
		</form>
	</div>
@endsection