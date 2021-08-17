    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
<link rel="stylesheet" href="css7.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form method= "Post">
    <div class="loginbox">
        <h1>Login</h1>
        <div class="textbox clearfix">
            <i class="fa fa-user"></i>
            <input type="text" name="username" placeholder="username">
        </div>
        <div class="textbox">
            <i class="fa fa-lock"> </i>
            <input type="password" name="password" placeholder="password">
        </div>
              
        <input type="submit" name ="login" class="btn" value="login">
    </div>
</form>
    <?php 
    $connect = mysqli_connect('localhost','root','','mywebsite');
    if(!$connect){
        echo"ket noi that bai";
    }
    else
    {
        echo"kết nối thành công";
    }
    if(isset($_POST['login'])){
        echo"ok";
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username==""||$password==""){
            echo '<p style="text-align: center;">Hãy điền đầy đủ thông tin!!!</p>';
        }
        else{
            $sql="SELECT * FROM users WHERE username='$username' and password='$password'";// so sánh đến tên ng dùng và mật khẩu
            $query= mysqli_query($connect,$sql);
            $check_login= mysqli_num_rows($query);
            if($check_login == 0){
                echo "<script>alert('Password or Username is incorrect, please try  again!')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            } 
            if ($check_login > 0){
                echo "<script>alert('Bạn đã đăng nhập thành công!')</script>";
                echo "<script>window.open('about.php','_self')</script>";
            }
        }

      
    }
    ?>
</body>