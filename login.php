<?php 
	// include database file 
	include('database/db.php');
?>

<?php 
	//login code start
	$message = '';
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		// check empty 
		if($email != '' && $password != ''){
			// check user 
			$query = "select * from users where email = '$email' and password = '$password'";
			$row = mysqli_query($connecton,$query);
			$number_of_user = mysqli_num_rows($row);
			if($number_of_user == 1){
				// valid user so give profile page access
				// set session
				// store all info you need 
				session_start();
				$_SESSION['login'] = true;
				$_SESSION['email'] = $email;

				// send user to profile page
				header('Location: profile.php');
			}else{
				$message .= "Wrong user or password!!";
			}

		}else{
			$message .= 'Please fill all the fields!!';
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- bootstrap cdn -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-12 col-lg-8">
				<div class="card p-3 ">
					<h1 class="text-center mb-5">Login</h1>
					<form action="" method="POST">
						<div class="row">
							<div class="col-12 col-lg-6">
								<label for="email"><b>Email*</b></label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="col-12 col-lg-6">
								<label for="password"><b>Password*</b></label>
								<input type="password" name="password" class="form-control">
							</div>
						</div>
						<input type="submit" name="submit" value="Login" class="form-control bg-info text-light border-0 mt-3">
					</form>
						
					<div class="text-center">
						<p class="text-danger mt-3"><?php echo $message; ?></p>
					</div>


					<div class="text-center">
						<p class="mt-3">have no account ? <a href="registration.php">Registration</a></p>
					</div>
				</div>

				
			</div>
		</div>
	</div>



</body>
</html>