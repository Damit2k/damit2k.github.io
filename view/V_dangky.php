<!DOCTYPE html>
<html>
<head>
	<title>
		Đăng Ký - Kollector Vietnam
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./view/css/home.css">
	<link rel="stylesheet" type="text/css" href="./view/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./view/icons/font/bootstrap-icons.css">
	<link rel="icon" type="img/x-icon" href="./view/img/logo.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<!-- top -->
<header>
	<div class="container-fluid top">
			<div class="row">
				<p>Mô Hình & Quà Tặng Công Nghệ</p>
			</div>
		</div>
	</div>

<!-- MENU -->
	<div class="container-fluid menu">
			<div class="row justify-content-md-center">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4-auto">
					<a href="?controller=trangchu">Kollector Vietnam</a>
				</div>
				<div class="col-md-4">	
					<div class="icon col-md-6">	
						<a href="?controller=dangnhap"><h4><i class="bi bi-person-circle"></i></h4></a>
						<div class="icon-dropdown">
							<button onclick="myFunction()" ><h4><i class="bi bi-search"></i></h4></button>
							<div id="myDropdown" class="dropdown-menu timkiemdropdown">
								<div class="container">
									<form method="get" action="index.php">
										<input type="hidden" name="controller" value="timkiem">
										<h6>TÌM KIẾM</h6>
										<input onkeyup="filterFunction()" type="text" placeholder="Tìm kiếm sản phẩm" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>" name="keyword"><button type="submit" id="btn-search"><i class="bi bi-search"></i></button>		
									</form>		
								</div>
							</div>					
						</div>
					</div>
				</div>
			</div>
	</div>

<!-- NAVBAR -->
	<div class="container">
				<nav class="navbar navbar-expand-lg navbar-bold">
  					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
  					</button>
 					 <div class="topnav collapse navbar-collapse" id="navbarNavDropdown">
					    <ul class="navbar-nav">
					      <li class="nav-item active">
					        <a class="nav-link a" href="?controller=trangchu">Trang chủ <span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link a" href="#">Giới Thiệu</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link a" href="?controller=giohang">Giỏ Hàng</a>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link a dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Sản Phẩm
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					         <?php foreach ($danhmuc as $key => $value) {
					        	?>
					      	 	  <a class="dropdown-item" href="?controller=danhmuc&id_dm=<?php echo $value['id_dm']?>"><?php echo $value['name']?></a>
					    	<?php } ?>
					        </div>
    		 				</li>
   						</ul>
  					</div>
				</nav>
	</div>

</header>
<!-- GIO HANG -->
<main>
	<div class="main">
		<div class="container-fluid">	
			<hr class="cach">
			<br>
			<div class="container dangky">
			<div class="row">
				<div class="col-md-6 left">
					<h1 class="cach"><b>ĐĂNG KÝ</b></h1>
					<hr style="background-color: black;height: 3px;width: 45px;">
				</div>
<!-- gio hang ben phai -->
				<div class="col-md-6 right">
					<form method="POST" action="">
										<input type="hidden" name="controller">

										<p><h5>Tạo tài khoản đăng nhập</h5></p>
										<input class="timkiem-inputtk" type="text" placeholder="Họ và tên của bạn" value="<?php echo isset($data['name']) ? $data['name'] : ''; ?>" name="name" id="name">
										<span class="error"><?php echo isset($error['name']) ? $error['name'] : ''; ?><br></span>

										<input class="timkiem-inputtk" type="text" placeholder="Tên tài khoản" value="<?php echo isset($data['user']) ? $data['user'] : ''; ?>" name="username" id="username"><span class="error">
										<?php echo isset($error['user']) ? $error['user'] : ''; ?></span><br>

										<input class="timkiem-inputtk" type="password" placeholder="Mật khẩu" value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>" name="password" id="password"><span class="error">
										<?php echo isset($error['password']) ? $error['password'] : ''; ?></span><br>

										<input class="timkiem-inputtk" type="password" placeholder="Lặp lại mật khẩu" value="<?php echo isset($data['repassword']) ? $data['repassword'] : ''; ?>" name="repassword" id="confirm_pass"><span class="error">
										<?php echo isset($error['repassword']) ? $error['repassword'] : ''; ?></span><br>
										<span>Bạn là: </span>

										<input class="radio" type="radio" value="nam" name="gioitinh" checked> <label class="radio" for="nam"> Nam</label>									
										<input class="radio" type="radio" value="nu" name="gioitinh"> <label class="radio" for="nam"> Nữ</label><br>
										<input class="timkiem-inputtk" type="date" name="sinhnhat" value="<?php echo isset($data['sinhnhat']) ? $data['sinhnhat'] : ''; ?>">
										<span class="error">
										<?php echo isset($error['sinhnhat']) ? $error['sinhnhat'] : ''; ?></span><br>

										<input class="timkiem-inputtk" type="text" name="sdt" placeholder="Số điện thoại của bạn" id="phone" value="<?php echo isset($data['sdt']) ? $data['sdt'] : ''; ?>">
										<span class="error">
										<?php echo isset($error['sdt']) ? $error['sdt'] : ''; ?></span><br>

										<input class="timkiem-inputtk" type="text" name="email" placeholder="Email của bạn" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
										<span class="error">
										<?php echo isset($error['email']) ? $error['email'] : ''; ?></span><br>

										<input class="timkiem-inputtk" type="text" name="diachi" placeholder="Địa chỉ của bạn" value="<?php echo isset($data['diachi']) ? $data['diachi'] : ''; ?>">
										<span class="error">

										<?php echo isset($error['diachi']) ? $error['diachi'] : ''; ?></span><br>

										<div class="sitebox-recaptcha">
											This site is protected by reCAPTCHA and the Google
											<a href="https://policies.google.com/privacy" class="timkiem-a" target="_blank" rel="noreferrer">Privacy Policy</a> 
											and <a href="https://policies.google.com/terms" class="timkiem-a" target="_blank" rel="noreferrer">Terms of Service</a> apply.
										</div><br>
										<button name="save" id="submit" type="submit" class="timkiem-button btn btn-secondary">ĐĂNG KÝ</button>

										
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="container-fluid giohang-footer rem20">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					 <i class="bi bi-envelope-fill"> </i> Đăng ký nhận tin:
					<input type="type" placeholder="Email của bạn" name="">
					<button class="btn btn-secondary">ĐĂNG KÝ</button>
					<i class="bi bi-telephone-fill"></i> Hỗ trợ / Mua hàng: 0981253684
				</div>
			</div>
		</div>
	</div>
</main>
<!-- FOOTER -->
<footer>
	<div class="container footer">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-aboutus">
					<h5>Giới Thiệu</h5>
					<br>
					<p>Kollector VN là trang mua sắm trực tuyến sản phẩm Đồ chơi mô hình & Quà tặng công nghệ. Thường xuyên theo dõi website của chúng mình để liên tục được cập nhật nhé !</p>
					<img src="./view/img/logo.png">
				</div>
			</div>
			<div class="col-md-2">
				<div>
					<h5>Liên Kết</h5>
					<br>
					<ul>
						<li><a class="a" href="">Tìm kiếm</a></li>
						<li><a class="a" href="">Giới thiệu</a></li>
						<li><a class="a" href="">Chính sách đổi trả</a></li>
						<li><a class="a" href="">Chính sách bảo mật</a></li>
						<li><a class="a" href="">Điều khoản dịch vụ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div>
					<h5>Thông Tin Liên Hệ</h5>
					<br>
					<ul>
						<li><i class="bi bi-house-door-fill"></i> 51 Ngõ 318 Đê La Thành, Hà Nội</li>
						<li><i class="bi bi-telephone-fill"></i> 0833115555</li>						
						<li><i class="bi bi-envelope-fill"></i> kollectorvn@gmail.com</li>
					</ul>
				</div>
			</div>
			<div class="col-md-1">
				<div class="footer-fanpage">
					<h5>Fanpage</h5>
					<br>
					<div class="footer-static-content"> 
								<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/kollector.vn" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=335&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkollector.vn&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false"><span style="vertical-align: bottom; width: 335px; height: 130px;"><iframe name="f34b1b57c54f494" width="1000px" height="300px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v10.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df34a3a0c53094c8%26domain%3Dkollector.vn%26origin%3Dhttps%253A%252F%252Fkollector.vn%252Ff2799f20b1d1ce4%26relation%3Dparent.parent&amp;container_width=335&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkollector.vn&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false" style="border: none; visibility: visible; width: 335px; height: 130px;" class=""></iframe></span></div>
							</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-4 copyright">
				Copyright © 2021 Kollector Vietnam. Powered by Damit
			</div>
		</div>
	</div>
</footer>

<script src="./view/bootstrap/jquery-3.3.1.min.js"></script>
<script src="./view/bootstrap/popper.min.js"></script>
<script src="./view/bootstrap/js/bootstrap.min.js"></script>
<script src="./view/bootstrap/js/bootstrap.js"></script>

</body>
</html>