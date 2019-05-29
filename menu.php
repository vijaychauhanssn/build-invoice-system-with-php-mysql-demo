<ul class="nav navbar-nav flex-row">
<li class="dropdown">
	<button class="btn btn-primary dropdown-toggle border-0" type="button" data-toggle="dropdown">Invoice
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a class="dropdown-item" href="invoice_list.php">Invoice List</a></li>
		<li><a class="dropdown-item" href="create_invoice.php">Create Invoice</a></li>				  
	</ul>
</li>
<?php 
if($_SESSION['userid']) { ?>
	<li class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Logged in <?php echo $_SESSION['user']; ?>
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#">Account</a></li>
			<li><a class="dropdown-item" href="action.php?action=logout">Logout</a></li>		  
		</ul>
	</li>
<?php } ?>
</ul>
<br /><br /><br /><br />