<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Manager Product</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="admin.css">
  </head>
  <body>
  <a href="../index.php" class='btn btn-success'>Home</a>
    <div class="container">
      <div class="row">
      <a href="insert.php" class="btn btn-success">Thêm sản phẩm</a href="insert.php">
                  <table class="table">
                    <tr>
                      <th>STT</th>
                      <th>Tên Sản Phẩm</th>
                      <th>Giá sản phẩm</th>
                      <th>Mô tả của sản phẩm</th>
                      <th>Loại sản phẩm</th>
                      <th>Ảnh của sản phẩm</th>
                      <th colspan="3" class="text-center">Action</th>
                    </tr>
                  <?php
                  $conn=new mysqli("localhost","root","","mywebsite");
                  $result = $conn->query("SELECT * FROM product,category where product.CategoryID=category.CategoryID");
                  $num=0;
                  while ($row = $result->fetch_array()) {
                      $num++;
                      echo "<tr>";
                      $product_id = $row["product_id"];
                      $product_name = $row["product_name"];
                      $product_price = $row["product_price"];
                      $product_Description = $row["Product_des"];
                      $CategoryName = $row["CategoryName"];
                      $product_image = $row["Product_image"];
                      echo "<td>$num</td><td>$product_name</td><td>$product_price</td><td>$product_Description</td><td>$CategoryName</td><td><img src='../$product_image' height='40'/></td>
                      <td><a href='Edit.php?id={$product_id}' class='btn btn-primary'>Edit</td>
                      <td><a href='delete.php?id={$product_id}'
                       class='btn btn-danger'>Delete</td>
                       </td>";
                      echo "</tr>";
                  }
                ?>
                  </table>
                </div>
      </div>
    </div>

    <!--JS footer web-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
