<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
label{
    color:white;
}
</style>
<body style="background-image:url(https://thietbiketnoi.com/wp-content/uploads/2020/01/tong-hop-hinh-nen-background-vector-designer-dep-do-phan-giai-fhd-2k-4k-moi-nhat-1-1024x640.jpg)">
    <?php  $conn=new mysqli("localhost","root","","mywebsite"); ?>
    <div class="container">
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input class="form-control" name="name" type="text" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
              <label for="priceproduct">Giá sản phẩm</label>
              <input type="text" name="price" id="priceproduct" class="form-control">
            </div>
            <div class="form-group">
              <label for="des">Mô tả của sản phẩm</label>
              <input name="des" type="text" id="des" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Loại sản phẩm</label>
                <select name="category">
                    <?php 
                        $result=$conn->query("select * from category");
                        while($row=$result->fetch_array()){
                            $catId=$row["CategoryID"];
                            $catName=$row["CategoryName"];
                            echo "<option value='$catId'>$catName</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="img">Ảnh của sản phẩm </label>
                <input type="file" name="image" id="">
            </div>
            <button name="submit" type="submit" class="form-control btn btn-primary">Thêm</button>
            
            </form>
        </div>
    </div>
                <?php
                $conn=new mysqli("localhost","root","","mywebsite");
                if(isset($_POST['submit'])){
                    $product_name=$_POST['name'];
                    $product_price=$_POST['price'];
                    $product_des=$_POST['des'];
                    $cat=$_POST['category'];
                    // get img
                    $product_image=$_FILES['image']['name'];
                    $target="../images/".basename($product_image);
                    $resulttarget="images/".basename($product_image);
                        $result2=$conn->query("INSERT INTO `product`(`product_name`, `product_price`, `Product_image`, `Product_des`, `CategoryID`) VALUES('$product_name','$product_price','$resulttarget','$product_des','$cat')");
                        move_uploaded_file($_FILES['image']['tmp_name'],$target);
                        if($result2){
                            echo "<script>alert('Add Success')</script>";
                            header("location:admin.php");
                        }
                        else{
                            echo "<script>alert('Add Failed')</script>";
                        }
                }
           



?>
</body>
</html>