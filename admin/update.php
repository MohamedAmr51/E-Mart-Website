<doctype html>
    <html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <title>EMART</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $ID = $_GET['id'];
    $up = mysqli_query($con,"select * from prod where id=$ID");
    $data = mysqli_fetch_array($up);
    ?>
<center>
    <div class ="main">
        <form action="up.php"method="post" enctype="multipart/form-data">
         <h2>Editing Products</h2>
         <input type="text" name='id' value='<?php echo $data['id']?>'>
         <br>
         <input type="text" name='name' value='<?php echo $data['name']?>'>
<br>
        <input type="text" name='price' value='<?php echo $data['price']?>'>
        <br>
        <input type="file" id="file" name='image' style='display:none;'>
        <label for="file">Update image </label>
        <button name='update' type='submit'>Update product</button>
        <br><br>
        <a href="products.php">View all products</a>
</form>
</div>
<p>developer by al tarsh team</p>
</center>
</body>
</html>
