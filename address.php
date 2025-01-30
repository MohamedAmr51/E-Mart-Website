
<doctype html>
    <html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <title>Address</title>
    <link rel="stylesheet" href="admin/index.css">
</head>
<body>



<center>
    <div class ="main">
    <form action="back.php"method="post" enctype="multipart/form-data"> <button name='back'>Back To Cart</button> </form>
        <form action="insert.php"method="post" enctype="multipart/form-data">
         <h2>Enter Your Address</h2>
         
         <input type="text" name='country' placeholder="Country">
        <br>
        <input type="text" name='city' placeholder="City"> 
        <br>
        <input type="text" name='postal_code' placeholder="Postal Code">
        <br>
        <input type="text" name='street' placeholder="Street Name">
        <br>
        <input type="text" name='building' placeholder="Building Number">
        <br>
        <input type="text" name='floor' placeholder="Floor">
        <br>
        <input type="text" name='apartment' placeholder="Apartment">
        <br>
        <input type="text" name='phone' placeholder="Phone Number">

        <input type="file" id="file" name='image' style='display:none;'>
        
        <button name='save'>Save Your Address</button>

        
        <br><br>
        
</form>
</div>

<p>developer by al tarsh team</p>
</center>
</body>
</html>
