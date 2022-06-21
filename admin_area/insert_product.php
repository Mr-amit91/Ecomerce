<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
$product_title=$_POST['product_title'];
$product_description=$_POST['description'];
$product_keyword=$_POST['product_keyword'];
$product_categories=$_POST['product_categories'];
$product_brands=$_POST['product_brands'];
$product_price=$_POST['product_price'];
$product_status='true';

//accessing image
$product_image1=$_FILES['product_image1']['name'];
$product_image2=$_FILES['product_image2']['name'];
$product_image3=$_FILES['product_image3']['name'];

//accessing image temp name
$tmp_image1=$_FILES['product_image1']['tmp_name'];
$tmp_image2=$_FILES['product_image2']['tmp_name'];
$tmp_image3=$_FILES['product_image3']['tmp_name'];

//cheaking empty condition
if($product_title=='' or $product_description=='' or $product_keyword=='' or $product_categories=='' or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' ){
    echo "<script>aleart('please fill all the available fields') </script";
    exit();
}else{
    move_uploaded_file($tmp_image1,"./product_images/$product_image1");
    move_uploaded_file($tmp_image2,"./product_images/$product_image2");
    move_uploaded_file($tmp_image3,"./product_images/$product_image3");

    //insert query
    $insert_product="insert into `products` (product_title,product_description,	products_keyword,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values('$product_title','$product_description','$product_keyword','$product_categories','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status' )";
    $result_query=mysqli_query($con,$insert_product);
        if($result_query){
            echo "<script> alert('product inserted successfully') </script>";  
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product-Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css  link -->
    <link rel="stylesheet" href="../style.css">
    <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="enter product title" autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="description" autocomplete="off" required="required">
            </div>

            <!-- Keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">product_keyword</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="enter product description" autocomplete="off" required="required">
            </div>

            <!-- category -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select  ">
                    <option value="">Select a category</option>
                    <?php
              $select_query="select * from `categories`";
              $result_query=mysqli_query($con,$select_query);
              while($row_data=mysqli_fetch_assoc($result_query)){
                $category_title=$row_data['category_title'];
                $category_id=$row_data['category_id'];
                echo "<option value='$category_id'>$category_title</option>";
              }
              ?>
                </select>
            </div>

            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select  ">
                    <option value="">Select a brand</option>
                    <?php
              $select_query="select * from `brands`";
              $result_query=mysqli_query($con,$select_query);
              while($row_data=mysqli_fetch_assoc($result_query)){
                $brand_title=$row_data['brand_title'];
                $brand_id=$row_data['brand_id'];
                echo "<option value='$brand_id'>$brand_title</option>";
              }
              ?>
                </select>
            </div>

            <!-- Image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>

            <!-- Image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>

            <!-- Image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>

            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label"><b>product Price</b></label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="enter product Price" autocomplete="off" required="required">
            </div>

            <!-- Button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert products" >
            </div>
        </form>
    </div>
    
</body>
</html>