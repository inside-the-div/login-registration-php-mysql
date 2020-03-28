<?php 
	session_start();
	if(!$_SESSION['login']){
		header('Location: index.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home page</title>
	<!-- bootstrap cdn -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	
	<div class="container mt-4">
		<div class="row">
			<div class="col-8 offset-lg-2">
				<div class="card p-3">
					<h1 class="text-center py-3">My profile </h1>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus et, itaque explicabo magnam praesentium voluptatibus vitae, ipsa dolor, rerum quos laudantium officia maiores amet laboriosam rem alias ipsam ab accusantium distinctio aut aspernatur eius, sapiente illum? Cumque suscipit rem obcaecati dolorem pariatur tempore temporibus doloribus fugiat odio impedit neque excepturi, minus sequi eum quas dolore, optio. Voluptates suscipit minus cum officia harum labore nulla reiciendis illo molestias assumenda optio placeat ea voluptatem, deserunt iste, eum quae porro sint, delectus dolores, iure et dolorum voluptatum neque. Quo quibusdam eaque eius perferendis praesentium quidem explicabo adipisci labore? Mollitia vitae dolores nobis nulla.
					<div class="text-center">
						<a class="btn btn-info rounded-0 mt-3" href="index.php">Home</a>
						<a class="btn btn-danger rounded-0 mt-3" href="logout.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>
</html>