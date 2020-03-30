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

					header("location:index.php")

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
  <img src="image/ahindi.jpg" alt="A HINDI GURU" style="width:85px;">
  <a href="index.php">Home</a>



  <a href="#" data-toggle="modal" data-target="#myModal"> Log in </a>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
     <div class="modal-content title1">
      <div class="modal-header">
      	<h2 class="modal-title title1"><span style="color:darkblue;font-size:20px;font-weight: bold">Login to your Account</span></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
			<h4 class="card-title mt-3 text-center">Login</h4>
			<p class="text-center">Get started with your free account</p>
			<p>
				<a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>   Login via Gmail </a>				
				<a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook"></i>   Login via facebook </a>				
			</p>
			<p class="text-center">OR</p>
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
				<div class="modal-footer">
           			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		            <button type="submit" name="submit" class="btn btn-primary">Log in</button>			
         		</div>
				<p class="text-center">If You don't have an Account then SignUP First.</p>
			</form>
		  </form>
	  	</div>
       </div>
   	 </div>
 	</div>



 <a href="#" data-toggle="modal" data-target="#myModal3"> SignUp </a>
  <div class="modal fade" id="myModal3">
    <div class="modal-dialog">
     <div class="modal-content title1">
      <div class="modal-header">
      	<h2 class="modal-title title1"><span style="color:darkblue;font-size:20px;font-weight: bold">SignUp to your Account</span></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
			<h4 class="card-title mt-3 text-center">SignUp</h4>
			<p class="text-center">Get started with your free account</p>
			<p>
				<a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>   Login via Gmail </a>				
				<a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook"></i>   Login via facebook </a>				
			</p>
			<p class="text-center">OR</p>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">





</ul>





<div class="content">

<h3>Sticky Navigation Bar Example</h3>
<p>The navbar will <strong>stick</strong> to the top when you reach its scroll position.</p>
<p><strong>Note:</strong> Internet Explorer, Edge 15 and earlier versions do not support sticky positioning. Safari requires a -webkit- prefix.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
</div>


<footer>
  <p>Copyright © 2020 A HINDI GURU | Powered by A HINDI GURU</p>
</footer>


  <!----stick_navition_bar---->
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<!----stick_navition_bar_end--->
 

</body>
</html>