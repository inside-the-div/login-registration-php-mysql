<?php 
	// include database fiel 
	include('database/db.php');
?>
<?php 
	// registration code start
	$message = '';
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];
		// now check empty or not 
		if($name != '' && $email != '' && $password != '' && $c_password != '' ){
			// now check password match or not
			if($password == $c_password){
				// now check password length must >= 8
				if(strlen($password) >= 8){
					// now check email Already use or not

					$query = "select * from users where email = '$email'";
					$row = mysqli_query($connecton,$query);
					$number_of_user = mysqli_num_rows($row);
					if($number_of_user<=0){
						// now store user data and complete registration
						$query = "insert into users(name,email,password) values('$name','$email','$password')";
						$insert = mysqli_query($connecton,$query);

						if($insert){
							$message .="Registration Success";
						}else{
							$message .="Something Wrong!!";
						}
					}else{
						$message .= 'This email already used!!';
					}
				}else{
					$message .= 'Password size must be >= 8';
				}
			}else{
				$message .= 'Password not match!!!!';
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
	<title>Registration</title>
	<!-- bootstrap cdn -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="border p-3 border-dark text-center ">
					<h1 class="text-center mb-5">Registration</h1>

					<form action="" method="POST">
						<div class="row">
							<div class="col-12 col-lg-6">
								<label for="name"><b>Name*</b></label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="col-12 col-lg-6">
								<label for="email"><b>Email*</b></label>
								<input type="email" name="email" class="form-control">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-lg-6">
								<label for="password"><b>Password*</b></label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="col-12 col-lg-6">
								<label for="c_password"><b>Confirm Password*</b></label>
								<input type="password" name="c_password" class="form-control">
							</div>
						</div>
						<input type="submit" name="submit" value="Registration" class="form-control bg-info text-light border-0 mt-3">
					</form>
					<!-- from end -->

					<div class="text-center">
						<p class="text-danger mt-3"><?php echo $message; ?></p>
					</div>

					<div class="text-center">
						<p class="mt-3">Already have account ? <a href="login.php">Login</a></p>
					</div>

				</div>
			</div>
		</div>
	</div>



</body>
</html>