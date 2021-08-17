<head>
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
    <link href="./style.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-branch" href="#">
			<img src="./images/banner.jpg" height="50">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link active" href="index.php">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Admin/admin.php">Quản lí</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">GIới thiệu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Mã giảm giá</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Lịch sử</a>
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
	<!-- jumbotron -->
<div class="container-fluid">
	<div class="jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<div id="form_search">
                <form >
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
			<h1 class="display-4">Welcome to ATN SHOP</h1>
		</div>
		<!-- Horizontal Rule -->
		<hr> 
		
	</div>
</div>
<?php 
          $connect=new mysqli("localhost","root","","mywebsite");
          if(isset($_GET['id'])){
              $productID=$_GET['id'];
           	 $result=$connect->query("SELECT * FROM `product` WHERE product_id='$productID'");        
                while($row_pro=$result->fetch_array()){
                    $product_image = $row_pro['Product_image'];
                    $product_name = $row_pro['product_name'];
                    $product_price = $row_pro['product_price'];
                    $product_des = $row_pro['Product_des'];
                    $product_id = $row_pro['product_id'];                 
                }
        }
        ?>
<div class="container-fluid">
<div class="row">
		<div class="col-lg-6">
		<h3 style="color: red;">Tên của Sản Phẩm là : <?php echo "$product_name" ?></h3>
		<h5>Giá của sản phẩm là : <?php echo "$product_price" ?></h5>
		<p><strong>Mô tả</strong> : <?php echo "$product_des" ?></p>
		</div>
		<div class="col-lg-6">
		<a href="index.php">
		<button><img style="width:100%;height:30rem;border-radius:3%" src="<?php echo "$product_image" ?>" /></button></a>
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
				<img src="./images/logo5.jpg">
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