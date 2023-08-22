
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- awesome font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image11 {
  width: 110px;
  height: 110px;
}
.footer{
    position:absolute;
    bottom:0;
}
.product_img{
    width:100px;
    height:100px;
    object-fit:contain;
}
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo-home.png" alt=""class="logo">  <h2>ADMIN PAGE</h2>
                <nav class="navbar navbar-expand-lg">
                  
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome admin</a>
                        </li>
                    </ul>

             </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage details</h3>
        </div>
        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#"><img src="../images/logo2.png" alt="" class="admin_image11"></a>
                    <p class="text-light text-center">Admin </p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View products</a>
                </button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert categories</a>
                </button>
                    <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert products</a>
                </button>
                    <button><a href="index.php?list_orders" class="nav-link text-light bg-info my-1">All orders</a>
                </button>
                <button><a href="index.php?list_payments" class="nav-link text-light bg-info my-1">All payments</a>
                </button>
                    <button><a href="index.php?list_users" class="nav-link text-light bg-info my-1">list users</a>
                </button>
                </div>
            </div>
        </div>

      