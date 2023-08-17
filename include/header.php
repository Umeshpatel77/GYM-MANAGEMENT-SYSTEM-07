	<header class="header-section">
		<div class="header-top">
			<div class="row m-0">
				<div class="col-md-6 d-none d-md-block p-0">
					<!-- <div class="header-info">
						<i class="material-icons">map</i>
						<p>184 Main Collins Street</p>
					</div>
					<div class="header-info">
						<i class="material-icons">phone</i>
						<p>(965) 436 3274</p>
					</div> -->
				</div>
				<div class="col-md-6 text-left text-md-right p-0" style="color:black;">
                 <?php if(strlen($_SESSION['uid'])==0): ?>
					<div class="header-info d-none d-md-inline-flex" style="color:black;">
						<i class="material-icons"></i>
						<a href="login.php"><p>USER LOGIN </p></a>
					</div>
					<?php else :?>
					<div class="header-info d-none d-md-inline-flex text-dark" style="color:black;">
						<i class="material-icons"></i>
						<a href="profile.php"><p>My Profile</p></a>
					</div>
					<div class="header-info d-none d-md-inline-flex text-dark" style="color:black;">
						<i class="material-icons"></i>
						<a href="changepassword.php"><p style="color:black;">Change Password</p></a>
					</div>
					<div class="header-info d-none d-md-inline-flex" style="color:black;">
						<i class="material-icons"></i>
						<a href="logout.php"><p>Logout</p></a>
					</div>
					
					<?php endif;?>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<a href="index.php" class="site-logo" style="color:#fff; font-weight:bold; font-size:26px;">
				<br />
				<small style="margin-top:-4%;"></small>
			</a>
			
			<div class="container">
				<ul class="main-menu" style="color:black;">
					<li><a href="index.php" style="color:black;" class="active">Home</a></li>
					<li><a href="about.php" style="color:black;">About</a></li>
					<li><a href="contact.php" style="color:black;">Contact</a></li>
					
					<?php if(strlen($_SESSION['uid'])==0): ?>
			<li><a href="admin/" style="color:black;">Admin Login</a></li>
					<?php else :?>
						<li><a href="booking-history.php" style="color:black;">Booking History</a></li>
						<?php endif;?>
				</ul>
			</div>
		</div>
	</header>