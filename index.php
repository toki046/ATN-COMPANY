<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MOKI SHOP</title>
<!-- Import Boostrap css, js, font awesome here -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- CSS -->
<link href="./style.css" rel="stylesheet">
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-branch" href="#">
				<img src="./images/banner.png" height="50">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Trang chủ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Quản lí</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">GIới thiệu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Đăng Nhập</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Đăng Kí</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Carousel -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
			<li data-target="#slides" data-slide-to="3"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="./images/banner1.webp" height="500px">
			</div>
			<div class="carousel-item">
				<img src="./images/banner2.jpg" height="500px">
			</div>
			<div class="carousel-item">
				<img src="./images/banner.png " height="500px">
			</div>
			<div class="carousel-item">
				<img src="./images/banner2.jpg" height="500px">
			</div>
		</div>
	</div>
	<!-- jumbotron -->
	<div class="container-fluid">
		<div class="jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<div id="form_search">
					<form>
						<input type="text" name="user_query" placeholder="Tìm kiếm">
						<input type="submit" value="Search">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">WELCOME TO ATN SHOP</h1>
			</div>
			<!-- Horizontal Rule -->
			<hr>
			<div class="col-12">
				<p>TOP BEST SELLING</p>
			</div>
		</div>
	</div>
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4 ">
				<img src="images/logo5.jpg" height="350px">
				<h3>200.000VNĐ</h3>
				<p>SOLD: 2402 Ps</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="images/logo1.jpg" height="350px">
				<h3>350.000VNĐ</h3>
				<p>SOLD: 3500 Ps</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="images/logo4.jpg" height="350px">
				<h3>400.000VNĐ</h3>
				<p>SOLD: 3800 Ps</p>
			</div>
		</div>
		<hr class="my-4">
	</div>
	<h1 class="jumbotron text-center">
		SHOPPING SPACE
	</h1>
	<div class="container">
		<div class="row">
			<div class='col-md-3'>
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						GodZila</div>
					<div class='panel-body'><img src='./images//GODZILA.png' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 250.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						IRONMAN</div>
					<div class='panel-body'><img src='./images/ironman.png' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b>125.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						AUTO BOT</div>
					<div class='panel-body'><img src='images/AUTOBOT.png' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 145.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3'>
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						LBX Hunter</div>
					<div class='panel-body'><img src='./images/lbx hunter.png' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 320.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3' style="margin-top:4%">
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						LBX Pathenon</div>
					<div class='panel-body'><img src='./images/lbx pantheon.png' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 300.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3' style="margin-top:4%">
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						LBX Perseus</div>
					<div class='panel-body'><img src='./images/lbx perseus.png' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 290.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3' style="margin-top:4%">
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						MH GOKU</div>
					<div class='panel-body'><img src='./images/MH goku.jpg' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 290.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>
			<div class='col-md-3' style="margin-top:4%">
				<div class='panel panel-danger'>
					<div class='panel-heading' style='background-color: yellow; width: 170px; border-radius: 5px;'>
						MH YASSUO</div>
					<div class='panel-body'><img src='./images/MH ys.jpg' class='img-responsive'
							style='width: 250px; height: 290px; border-radius: 5px;'></div>
					<div class='panel-footer'> Price:<b> 290.000VNĐ </b>
						<div class='panel-footer'><button class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='#'>Detail</a></button> <button style='margin-left:3%'
								class='btn btn-primary btn-sm'><a style='color:white;text-decoration:none;
                  ' href='../#'>BUY</a></button></div>
					</div>
				</div>
			</div>

		</div>

	</div>
	<hr class="my-4">
	</div>
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Contact us</h2>
			</div>
			<div class="col-12 social padding">
				<a href="https://www.facebook.com/profile.php?id=100050909333275"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<!-- <img src="./images/logo5.jpg"> -->
					<hr class="light">
					<p>111-222-3333</p>
					<p>hungtokinoway@gmail.com</p>
					<p>Cổ Nhuế street, Hanoi, Vietnam</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Working hours</h5>
					<hr class="light">
					<p>Monday-Friday: 8am - 5pm</p>
					<p>Weekend: 8am - 12am</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Services</h5>
					<hr class="light">
					<p>Outsourcing</p>
					<p>Website Shopping</p>
					<p>Moki Shopping</p>
				</div>
				<div class="col-12">
					<hr class="light-100">
					<h5>&copy; WebPro</h5>
				</div>
			</div>
		</div>
	</footer>
</body>