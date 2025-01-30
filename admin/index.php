
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



<center>
    <div class ="main">
        <form action="insert.php"method="post" enctype="multipart/form-data">
         <h2>Emart shopping center</h2>
         <img src="image1.png" alt="logo" width="450px">
         <input type="text" name='name' placeholder="Name Of Product">
<br>
        <input type="text" name='price' placeholder="Price Of Product">
        <br>
        <input type="file" id="file" name='image' style='display:none;'>
        <label for="file">upload image </label>
        <button name='upload'>Post the product</button>
        <br><br>
        <a href="products.php">View all products</a>
</form>
</div>
<p>developer by al tarsh team</p>
</center>
<center>
    <a href="login.php">Logout</a>
</center>
</body>
</html>
