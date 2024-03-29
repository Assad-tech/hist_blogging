<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- login Div -->
	<div class="container-fluid">
		<div class="row d-flex justify-content-center align-items-center login-div ">
			<!-- Side image -->
			<div class="col-md-12 col-lg-6 col-xl-12 login-side-img">
				<img src="images/login-side-img.webp" class="img-fluid h-100" alt="Sample image">
			</div>
			<!-- Login div -->
			<div class="col-md-12 col-lg-6 col-xl-12 login-form">
				<form method="POST" action="login_process.php">
					<div class="divider align-items-center my-4">
						<p class="text-center fw-bold mx-3 mb-0 h4">Login</p>
					</div>
					<?php
					if (isset($_GET["message"])) {
					?>
						<div class="text-center">
							<p class="h5" style="color:<?php echo $_GET['color']; ?>">
								<?= $_GET["message"] ?>
							</p>
						</div>
					<?php
					}
					?>

					<!-- Email input -->
					<div class="form-outline mb-4">
						<input type="email" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" />
						<label class="form-label" for="form3Example3">Email address</label>
					</div>

					<!-- Password input -->
					<div class="form-outline mb-3">
						<input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
						<label class="form-label" for="form3Example4">Password</label>
					</div>

					<div class="m-0 p-0">
						<a href="#!" class="text-body">Forgot password?</a>
					</div>
					<!-- Login btn -->
					<div class="text-center login-btn text-lg-start mt-4 pt-2">
						<button type="submit" name="login" class="btn btn-secondary w-100" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
						<p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="account_register.php" class="link-danger">Register</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="py-4 px-4 px-xl-5 login-footer">
		<!-- Copyright -->
		<div class="text-white mb-3 mb-md-0">
			Copyright © 2020. All rights reserved.
		</div>
		<!-- Copyright -->
	</div>
	<!-- JS Files -->
	<script src="js/admin.js"> </script>
	<script src="js/"> </script>
	<script src="js/bootstrap.bundle.min.js"> </script>
</body>

</html>