<?php 
session_start();
include('header.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Invoice.php';
	$invoice = new Invoice();
	$user = $invoice->loginUsers($_POST['email'], $_POST['pwd']); 
	if(!empty($user)) {
		$_SESSION['user'] = $user[0]['first_name']."".$user[0]['last_name'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['email'] = $user[0]['email'];		
		$_SESSION['address'] = $user[0]['address'];
		$_SESSION['mobile'] = $user[0]['mobile'];
		header("Location:invoice_list.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>
<title>PeopleWhoCode : Demo Build Invoice System with PHP & MySQL</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('container.php');?>
<style type="text/css">
	.form-control {
    height: 46px;
    border-radius: 46px;
    border: none;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    margin-top: 1.5rem;
    background: rgb(67, 34, 167);
}
</style>
<div class="row" style="background-image: url(img/bg-1.jpg);">	
	<div class="demo-heading">
		<h2 class="text-white">Build Invoice System with PHP & MySQL</h2>
	</div>
	<div class="login-form">		
		<h4>Invoice User Login:</h4>		
		<form method="post" action="">
			<div class="form-group">
			<?php if ($loginError ) { ?>
				<div class="alert alert-warning"><?php echo $loginError; ?></div>
			<?php } ?>
			</div>
			<div class="form-group">
				<input name="email" id="email" type="email" class="form-control" placeholder="Email address"  required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pwd" placeholder="Password"  required>
			</div>  
			<div class="form-group">
				<button type="submit" name="login" class="btn btn-info">Login</button>
			</div>
		</form>
		<br>
		 <p><b>Email</b> : admin@ssn.com<br><b>Password</b> : ssn</p>		
	</div>		
</div>		
</div>
<?php include('footer.php');?>