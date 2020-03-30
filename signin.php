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



<?php 

include 'dbcon.php';

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

		$email_search = " select * from registration where email='$email' ";
		$query = mysqli_query($con,$email_search);

		$email_count = mysqli_num_rows($query);

		if($email_count){
			$email_pass = mysqli_fetch_assoc($query);

			$db_pass = $email_pass['password'];

			$_SESSION['username'] = $email_pass['username'];

			$pass_decode = password_verify($password, $db_pass);

			if ($pass_decode) {
				?>
					<script>
						alert("login successful")
					</script>

					header("location:acc")

				<?php
			}else{
				?>
					<script>
						alert("Password Incorrect")
					</script>
				<?php
			}

		}else{
			?>
					<script>
						alert("Invalid Email")
					</script>
				<?php
		}
}

?>




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
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<input type="password" name="password" class="form-control" placeholder="Enter password" value="" required>
				</div>
				<!----form-group----->
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block"> Login Now </button>
				</div>
				<p class="text-center">Not Have an Account? <a href="signup.php"> SignUP Here </a></p>

			</form>
			
		</article>
		

	</div>



<footer>
  <p>Copyright © 2020 A HINDI GURU | Powered by A HINDI GURU</p>
</footer>

</body>
</html>