<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
<link rel="stylesheet" href="dkicss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form method = "POST" enctype="multipart/form-data">
    <div class="registerbox">
        <h1>Register</h1>
        <div class="textbox clearfix">
            <i class="fa fa-user"></i>
            <input type="text" name = "username" placeholder="username">
        </div>
        <div class="textbox">
            <i class="fa fa-lock"> </i>
            <input type="password" name = "password" placeholder="password">
        </div>
        <div class="textbox">
            <i class="fa fa-lock"> </i>
            <input type="text" name="fullname" placeholder="fullname">
        </div>
        <div>
         <tr>
          <td width="15%"><b>Image:</b></td>
          <td colspan="3"><input type="file" name="image"/></td>
        </tr>      
         </div>
        <input type="submit" name ="register_submit"class="btn" value="Dang ky">
        
             <a href="login.php">
            <input type="button" name="Login" class="btn" value="Login">
        </a>
        </div>
</form>
       <?php
       $connect = mysqli_connect('localhost','root','','mywebsite');
       if(!$connect){
           echo"Ket noi that bai";
       }
       else
       {
           echo"Ket noi thanh cong";
       }
       if(isset($_POST['register_submit'])) {
           echo"ok";
           $file = $_FILES['image']['name'];
           print_r($_FILES['image']);
           $file_tmp =$_FILES['image']['tmp_name'];
           $path = "Avatar/";
           move_uploaded_file($file_tmp, $path.$file); 
         
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $sql="Insert into users values(null,'$username', '$password', '$fullname','$file')";    
        $result = mysqli_query($connect, $sql);
        if($result){
        echo"<script>alert('Account has been created successfully!')</script>";
        echo "<script>window.open('login.php','_self')</script>";
      }
      else{
        echo"<script>alert('Error')</script>";
      }  
     }
         ?>

</body>