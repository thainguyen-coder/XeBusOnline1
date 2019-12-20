	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="style3.css">
	</head>
	<body>
		<div id="tt">
		<form id="detail">
			<span>Thông tin</span> <br>
			<span> Mã tuyến:

				<?php 
				
				include 'config.php';
				$id = isset($_GET['id']) ? $_GET['id'] : '';
								//cau len sql 
				$query = "select * from route where id = '$id' ";
								//xu li cau lenh sql
				$result = mysqli_query($conn, $query);
				if($row = mysqli_fetch_array($result))
				{
					echo $row['id'];
				}
				
				?>
			</span> <br>
			<span>Tên tuyến:
				<?php 
				
				include 'config.php';
				$id = isset($_GET['id']) ? $_GET['id'] : '';
								//cau len sql 
				$query = "select * from route where id = '$id' ";
								//xu li cau lenh sql
				$result = mysqli_query($conn, $query);
				if($row = mysqli_fetch_array($result))
				{
					echo $row['name'];
				}
				
				?>
			</span> <br>
			<span>Lượt đi:<br>
				<?php 
				
				include 'config.php';
				$id = isset($_GET['id']) ? $_GET['id'] : '';
								//cau len sql 
				$query = "select * from route_setting where routeId = '$id' order by id  ";
								//xu li cau lenh sql
				$result = mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($result))
				{
					echo $row['name']. "--";
				}
				
				?>
			</span> <br>
			<span>Lượt về:<br>
				
				<?php 
				
				include 'config.php';
				$id = isset($_GET['id']) ? $_GET['id'] : '';
								//cau len sql 
				$query = "select * from route_setting where routeId = '$id' order by id  desc";
								//xu li cau lenh sql
				$result = mysqli_query($conn, $query);
				while($row = mysqli_fetch_array($result))
				{
					echo $row['name']."--";
				}
				
				?>
			</span> <br>
			<span>Đơn vị đảm nhận: </span> <br>
			<ul>
				<li>Thời gian hoạt động:

					<?php 
					
					include 'config.php';
					$id = isset($_GET['id']) ? $_GET['id'] : '';
								//cau len sql 
					$query = "select * from route where id = '$id' ";
								//xu li cau lenh sql
					$result = mysqli_query($conn, $query);
					if($row = mysqli_fetch_array($result))
					{
						echo $row['startTime']."--". $row['endTime'];
					}
					
					?>
				</li>
				<li>Giá vé:

					<?php 
					
					include 'config.php';
					$id = isset($_GET['id']) ? $_GET['id'] : '';
								//cau len sql 
					$query = "select * from route_description where routeId = '$id' ";
								//xu li cau lenh sql
					$result = mysqli_query($conn, $query);
					while($row = mysqli_fetch_array($result))
					{
						echo $row['fare'];
					}
					
					?>
				</li>
				<li>Độ dài tuyến: 
					
					<?php 
					
					include 'config.php';
					$id = isset($_GET['id']) ? $_GET['id'] : '';
									//cau len sql 
					$query = "select * from route_description where routeId = '$id' ";
									//xu li cau lenh sql
					$result = mysqli_query($conn, $query);
					while($row = mysqli_fetch_array($result))
					{
						echo $row['routeLenght'];
					}
					
					?>
					
				</li>
				<li>Số chuyến:
					
					<?php 
					
					include 'config.php';
					$id = isset($_GET['id']) ? $_GET['id'] : '';
									//cau len sql 
					$query = "select * from route_description where routeId = '$id' ";
									//xu li cau lenh sql
					$result = mysqli_query($conn, $query);
					while($row = mysqli_fetch_array($result))
					{
						echo $row['numberOfRoute'];
					}
					
					?>
				</li>
				
			</ul>
		</form>
	</div>

	</body>
	</html>