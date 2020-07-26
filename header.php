<?php

	session_start();
	error_reporting(0);
  $url = "https://tuan1242.herokuapp.com/";
 
 ?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <title><?php echo $title;?>Trường Đại Học Công Nghiệp Việt Trì</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $url;?>css/reset.css">
  <link rel="stylesheet" href="<?php echo $url;?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $url;?>css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="<?php echo $url;?>css/style.css">
  <script src="<?php echo $url;?>js/jquery-3.1.0.min.js"></script>
  <script src="<?php echo $url;?>js/bootstrap.min.js"></script>
  <script src="<?php echo $url;?>js/style.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url;?>images/favicon.ico" />
</head>
<body>
<div class="container">
	<!-- Header -->
	<header>
  <h2 ><a style="color: white" href="../index.php"><p><?php echo $_SESSION["tensv"]; ?></a></h2>	

		<a href="index.php" title="Trường Đại Học Công Nghiệp Việt Trì">
			<p>MIRAI international</p>
		</a>
	</header>
	<!-- End header -->
</div>
