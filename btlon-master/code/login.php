<!--  -->
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="web/css/c.css" type="text/css" media="all" />
	<style type="text/css">
	</style>
</head>
<body>
	<div>
	<img src="web/video/anhdong.jpg" style="width: 100%;height:643px;">
	<div class="login">
		<h1 >Đăng Nhập</h1>
     <div class="form">
	<form action="dangnhap.php" method="POST">
		<label style="font-size: 30px;margin-right: 10px;">Tài KHoản</label>
		<input placeholder="Tên Đăng Nhập" name="username" type="text" required>
		<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
		<br>
		<label style="font-size: 30px;margin-right: 23px;">Mật Khẩu</label>
		<input  placeholder="Mật Khẩu" name="password" type="password" >
		<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
		<div style="margin-top: 10px;">
		<span ><input type="checkbox" />Remember Me</span>
		<a href="#" style="color: red ; margin-left: 20px">Forgot Password?</a>
		<div class="clear"></div>
		</div>
		 <input type="submit" name="login" id="button" value="Login">
	</form>
		
	</div>
</div>
</div>
	
</body>
</html>