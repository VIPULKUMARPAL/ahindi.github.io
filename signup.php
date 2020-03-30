<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'links/link.php';?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>



<!-- header -->
<div class="header">
	<div class="row"> 
		<div class="col-lg-6 col-md-6 col-6">
			<img src="image/ahindi.jpg" alt="A HINDI GURU" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-6">
			<div class="headertext">
 			 <h3>A HINDI GURU</h3>
 			 <p>www.ahindiguru.in</p>
			</div>
		</div>
	</div>
</div>






<!-- navbar -->
<ul id="navbar">
  <img src="image/ahindi.jpg" alt="A HINDI GURU" style="width:90px;">
  <a href="signin.php">Log in</a>
  <a href="index.php">Home</a>
</ul>




<?php 

include 'dbcon.php';

if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$emailquery = " select * from registration where email = '$email' ";
	$query = mysqli_query($con,$emailquery);
	$emailcount = mysqli_num_rows($query);

	if($emailcount>0){
		?>
					<script>
						alert("Email is already existed.")
					</script>
				<?php

	}else{
		if($password === $cpassword){

			$insertquery = "insert into registration( username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

			$iquery = mysqli_query($con, $insertquery);

			

			if ($iquery) {
				?>
					<script>
						alert("Inserted Successfuly")
					</script>
				<?php
			}else{
				?>
					<script>
						alert("No Inserted")
					</script>
				<?php

			}


		}else{
			?>
				<script>
						alert("Password are not matching");
					</script>
				<?php

		}
	}
}


?>

	<div class="card bg-light">
		<article class="card-body mx-auto" style="msx-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get started with your free account</p>
			<p>
				<a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>   Login via Gmail </a>				
				<a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook"></i>   Login via facebook </a>				
			</p>
			<p class="divider-text">
				<span class="bg-light">OR</span>
			</p>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<input type="text" name="username" class="form-control" placeholder="Full name" required>
				</div>
				<!----form-group---->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					<input type="email" name="email" class="form-control" placeholder="Email address" required>
				</div>

<!----form-group---->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-phone"></i>
						</span>
					</div>
					<input type="number" name="mobile" class="form-control" placeholder="Phone number" required>
				</div>
<!----form-group---->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<input type="password" name="password" class="form-control" placeholder="Create password" value="" required>
				</div>

<!----form-group---->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<input type="password" name="cpassword" class="form-control" placeholder="Conform password" required>
				</div>
				<!----form-group----->
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account </button>
				</div>
				<p class="text-center"> Have an Account? <a href="signin.php"> Log In</a></p>

			</form>
			
		</article>
		

	</div>


<footer>
  <p>Copyright © 2020 A HINDI GURU | Powered by A HINDI GURU</p>
</footer>


</body>
</html>