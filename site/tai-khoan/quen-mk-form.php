<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../content/css/login.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

	<style type="text/css">
		.error {
			color: red;
			margin-right: 10px;
            font-size: 13px;
		}
	</style>

	<script type="text/javascript">
	$().ready(function() {
	$("#form_register").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"ma_kh": {
				required: true,
				maxlength: 15
			},
            "email": {
                    required: true,
                    email: true
            }
		},
		messages: {
			"ma_kh": {
				required: "Không được để trống",
				maxlength: "Hãy nhập tối đa 15 ký tự"
			},
			"email": {
                    required: "Không được để trống",
                    email: "Nhập đúng định dạng email"
            }
		}
	});
});
	</script>
</head>
<body>
<div class="container" id="container">
  <!-- <div class="form-container sign-up-container">

  </div> -->
  <div class="form-container sign-in-container">
    <form method="post" action="<?=$SITE_URL?>/tai-khoan/quen-mk.php" id="form_register">
    <?php  
                // if(isset($message))  
                // {  
                //      echo '<label class="text-danger">'.$message.'</label>';  
                // }  
                if(isset($MESSAGE) && strlen($MESSAGE) > 0){ 
                  // dùng isset để kiểm tra biến $MESSAGE có tồn tại hay không
                  // dùng hàm strlen để kiểm tra độ dài ký tự có lớn hơn 0 hay không
                  // sử dụng echo để in ra các biến $MESSAGE
                      echo "<span style='color:red; font-size: 16px;'>$MESSAGE</span>";
                  }
                ?>  
      <h1 style="color:orangered">Quên mật khẩu</h1><br>
      <input type="text" placeholder="Tên đăng nhập" name="ma_kh" required/>
      <input type="email" placeholder="Email" name="email" required/>
      <button  type="submit" name="btn_forgot" class="btn btn-info btn-success">Tìm lại mật khẩu</button>
      <a href="<?=$SITE_URL?>/trang-chinh/"><i class="fas fa-arrow-circle-left"></i> Quay lại trang chủ</a>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
        <button class="ghost" id="signIn">Đăng nhập</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello, Friend!</h1>
        <p>Nhập thông tin của bạn và bắt đầu hành trình với chúng tôi</p>
        <button class="ghost" id="signUp"><a href="dang-ky.php">Đăng ký</a></button>
      </div>
    </div>
  </div>
</div>
<!-- <script src="js/login.js"></script> -->
</body>
</html>