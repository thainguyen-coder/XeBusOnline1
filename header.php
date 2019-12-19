	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Hearder</title>
		<link rel="stylesheet" href="style1.css">
	</head>
	<body>
		<div id="head"><!-- phan banner -->
			<h1 style="text-align: center;color: #00CC00;background: #EEEEEE">Hỗ trợ người đi xe buýt</h1>
			<h2 style="text-align: center;color: #00CC00;background: #EEEEEE">tại TP.QUY NHƠN </h2>
		</div>
		<div id="menutop">
			<ul>
				<li><a href="?options=trangchu">Trang chủ</a></li>
				<li><a href="?options=gioithieu">Giới thiệu</a></li>
				<li><a href="?options=thongtin">Thông tin tuyến</a></li>
				<li><a href="?options=timduong">Tìm đường</a></li>
				<li><a href="?options=phananh">Phản ánh</a></li>
			</ul>
		</div>
		<div id="maincontent">
			<div id="content">
				<?php
				$options = isset($_GET['options']) ? $_GET['options'] : null;
				switch ($options ) {
					case 'trangchu':
					include "home.php";
					break;
					case 'gioithieu':
					include "about.php";
					break;
					case 'thongtin':
					include "route.php";
					break;
					case 'timduong':
					include "Findway.php";
					break;
					case 'phananh':
					include "feedback.php";
					break;
				}
				?>

			</div>
		</div>
	</body>
	</html>