<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
  $category_title=$_POST['cat_title'];

  //select data from database
  $select_query="select * from `categories` where Category_title='$category_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script> alert('This category is already present') </script>";
  }else{
  $insert_query="insert into `categories` (category_title) values('$category_title')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo "<script> alert('category inserted successfully') </script>";
  }
}
}
?>

<h2 class="text-center">Insert category</h2>
<form action="" method="POST" class="mb-2">
<div class="input-group w-90 mb-2">
   <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert_catories" aria-label="Category" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="insert categories">
  <!-- <button class="bg-info p-2 my-2 border-0">Insert category</button> -->
</div>
</form>