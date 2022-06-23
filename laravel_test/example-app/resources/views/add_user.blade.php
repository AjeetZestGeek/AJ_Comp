<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="{{url('store')}}">
		@csrf
		<div class="row d-flex justify-content-center pt-5">
			<div class="col-lg-4 col-md-4">
				<h4 class="text-center">Register</h4>
				<div class="row p-2">
					<div class="col-lg-2 col-md-2 col">
						<label for="name" class="form-label">Name</label>
					</div>
					<div class="col-lg-10 col-md-10 col">
						<input class="form-control" onkeyup="return validateName();" id="name" type="text" name="name" placeholder="Name">
					</div>
				</div>
				<div class="row p-2">
					<div class="col-lg-2 col-md-2 col">
						<label for="email" class="form-label">Email</label>
					</div>
					<div class="col-lg-10 col-md-10 col">
						<input class="form-control" id="email" type="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="row p-2">
					<div class="col-lg-2 col-md-2 col">
						<label for="pass" class="form-label">Password</label>
					</div>
					<div class="col-lg-10 col-md-10 col">
						<input class="form-control" id="pass" type="password" name="pass" placeholder="Password">
					</div>
				</div>
				<div class="row p-2">
					<div class="col-lg-2 col-md-2 col">
						<label for="conpass" class="form-label">Confirm Password</label>
					</div>
					<div class="col-lg-10 col-md-10 col">
						<input class="form-control" id="conpass" type="password" name="conpass" placeholder="Confirm Password">
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col p-2">
					<button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Register</button>
				</div>
				<hr>
				<span>Already have account <a href="login.php">Login Here</a></td></span>
			</div>
		</div>
	</form>
</body>
</html>