<doctype html>
    <html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <title>Products</title>
    <link rel="stylesheet" href="index.css">
    <style>

    .card{
float: right;
margin-top: 20px;
margin-left: 10px;
margin-right: 10px;

    }
    .card img{
        width: 100%;
        height: 200px;
        object-fit: fill;
    }
    main{

        width: 30%;
    }
    .navbar-brand{
        margin-left : 70px;
        margin-top : 40px;
        text-decoration :none;
        color:white;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href=""></a>
        <a href='index.php' class='btn'>Add Product</a> 
    </nav>
  <center>
   <h3> ADMIN PANNEL </h3>
</center>
<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM prod");
while ($row = mysqli_fetch_array($result))
echo "<center>
<main>   
<div class='card' style='width: 15rem;'>
  <img src='$row[image]' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete Product</a>
    <a href='update.php? id=$row[id]' class='btn btn-primary'>Modify Product</a>
  </div>
</div>
</main>
<center>
";
?>
<center>
  <a href="index.php">Back to add a product</a>
</center>
</body>
</html>
