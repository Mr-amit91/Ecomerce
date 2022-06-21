<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css  link -->
    <link rel="stylesheet" href="../style.css">
    <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .footer{
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- navbar -->
   <div class="container-fluid p-0">
       <!-- first child -->
       <nav class="navbar navbar-extend-lg navbar-light bg-info">
           <div class="container-fluid">
               <img src="../images/logo.jpg" alt="" class="logo">
               <nav class="navbar navbar-expand-lg">
                   <ul class="navbar-nav">
                       <li class="nav-item">
                           <a href="" class="nav-link">Welcome Guest</a>
                       </li>
                   </ul>
               </nav>
           </div>
       </nav>

       <!-- second child -->
       <div class="bg-light">
           <h3 class="text-center p-3">Manage details</h3>
       </div>

       <!-- third child -->
       <div class="row">
           <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
               <div class="p-3">
                   <a href="#"><img src="../images/juice1.jpeg" class="admin_image" alt=""></a>
                   <p class="text-light text-center">Admin Name</p>
               </div>
               <div class="button text-center">
                   <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Inserts Products</a></button>
                   <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                   <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Category</a></button>
                   <button><a href="" class="nav-link text-light bg-info my-1">View category</a></button>
                   <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                   <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                   <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                   <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                   <button><a href="" class="nav-link text-light bg-info my-1">List User</a></button>
                   <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
               </div>
           </div>
       </div>


       <!-- fourth child -->
       <div class="container my-3">
           <?php
           if(isset($_GET['insert_category'])){
                include('insert_category.php');
           }
           if(isset($_GET['insert_brand'])){
            include('insert_brand.php');
       }
           ?>
       </div>

        <!-- last child -->
        <div class="bg-info p-3 text-center footer">
  <p>All  Right reserved design by- amit 2022</p>
</div>
   </div>



 <!-- bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>