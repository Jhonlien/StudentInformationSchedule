<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sistem Informasi Sekolah</title>
      <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
      <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
</head>
<body>
  <div class="wrapper">
	<div class="container">
		<h1>Welcome Admin !</h1>
		<form class="form" action="{{ route('checklogin') }}" method="POST">
			{{ csrf_field() }}
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
</html>
