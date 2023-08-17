<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->

	

	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/image1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-black">
					<h2>About</h2>
				</div>
			</div>
		</div>
	</section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>About Us</h2>
			</div>
			<div class="row">

				<div class="col-lg-12 col-sm-6">
			<p>Welcome to our gym management system! We are a cutting-edge software solution designed to streamline and enhance the operations of gyms and fitness centers. Our platform is specifically tailored to meet the unique needs and challenges faced by gym owners, managers, trainers, and members.At our core, we prioritize efficiency, convenience, and effectiveness. Our goal is to provide a comprehensive suite of features and tools that simplify day-to-day management tasks, improve member engagement, and optimize overall gym operations.

Here are some key aspects of our gym management system:

Membership Management: Our system allows you to effortlessly manage memberships, including sign-ups, renewals, and cancellations. It provides a centralized database to store member information, track attendance, and generate reports.

Class and Schedule Management: We offer a user-friendly interface to create and manage fitness classes, group sessions, and personal training sessions. Members can easily view the schedule, sign up for classes, and receive automated reminders.

Point of Sale (POS) Integration: Our system seamlessly integrates with POS solutions, enabling you to sell products, merchandise, and services directly from your gym. This includes handling payments, inventory management, and tracking sales.

Attendance Tracking: With our system, you can easily track member attendance, whether it's for classes, open gym sessions, or personal training. This data helps you monitor member engagement and make informed decisions to improve retention rates.

Reporting and Analytics: We provide robust reporting capabilities to give you valuable insights into your gym's performance. Generate reports on revenue, attendance, member demographics, and more, empowering you to make data-driven decisions and optimize operations.
</p>
				</div>
			</div>
		</div>
	</section>
	

	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
