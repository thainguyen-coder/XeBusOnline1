

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="feedback.php" method="post">
		<div id="f1">
			<link rel="stylesheet" type="text/css" href="style1.css">
			<div id="hear1"><h2>Phản ánh về</h2></div>
			<div id="infor">
				<h3>Thông tin của bạn</h3>
				<div id="email">
					<table>
						<tr><td>
							<span>Địa chỉ email</span>
						</td>
						<td><input type="text" name="txtEmail"/></td></tr>
						<tr><td><span>Tên</span></td>
							<td><input type="text" name="txtName"/></td></tr>
							<tr><td><span>Số điện thoại</span></td><td><input type="text" name="txtNumber"/></td></tr>
						</table>
					</div>

				</div>
				<div id="feedback">
					<h3>Thông tin phản ánh</h3>
					
					<div>
						<span>Phản ánh về</span><select id="select" name="select1">
							<option selected="selected" value="">Xin hãy lựa chọn</option>
							
							<option value="2">Chất lượng, vi phạm xe buýt</option>
							<option value="5">Hạ tầng, bến bãi xe buýt</option>
							<option value="4">Lộ trình, thời gian hoạt động tuyến</option>
							<option value="3">Gương người tốt việc tốt, khen thưởng</option>
						</select>

						<div >
							Nếu hành khách phản ánh bằng tiếng Việt, xin vui lòng nhập thông tin bằng tiếng Việt có dấu<br>và nội dung phản ánh cần đầy đủ thông tin về ngày/giờ đi xe, tên trạm, tên đường… <br>Mọi phản ánh thiếu thông tin sẽ không được xác minh và xử lý.
						</div>
						<table>
							
							<div id="title">
								<tr><td>
								Tiêu đề </td><td> <input type="text" name="txtTittle" maxlength="200" /></td></tr>
							</div>
							
							<div id="content1">
								<tr><td>
								Nội dung</td><td> <input type="text" name="txtContent" maxlength="1000" /></td></tr>
							</div>
						</table>
					</div>
					<div id="button" style="margin-left: 170px;">
						<input type="submit" name="btnFeed" value="Phản ánh">
					</div>
					
				</div>


			</h2>
		</div>
	</form>
	<?php 
	include "config.php";
	if(isset($_POST["btnFeed"]))
	{
			//lay thong tin tu form
		$email = $_POST["txtEmail"];
		$name =$_POST["txtName"];
		$number = $_POST["txtNumber"];
		$select =$_POST["select1"];
		$title = $_POST["txtTittle"];
		$content =$_POST["txtContent"];
		if ($email == "" || $name == "" || $number == "" || $select== "" || $title=="" || $content =="") {
			echo "Bạn vui lòng điền đầy đủ thông tin!";
		}else{

			$sql = "INSERT INTO feedback(Email, Name, Numberr, Selecte, Tittle, Content
			
			) VALUES ('$email', '$name', '$number', '$select', '$title', '$content')";
				// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		
		echo "Cảm ơn phản hồi của bạn.Chúng tôi sẽ nhanh chóng khắc phục để đem đến sự hài lòng cho hành khách";
	}
}
?>

</body>
</html>