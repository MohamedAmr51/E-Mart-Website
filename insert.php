<?php

include('config.php');

if(isset($_POST['save'])){
     $APARTMENT = $_POST['apartment'];
     $BUILDING = $_POST['building'];
     $CITY = $_POST['city'];
     $COUNTRY = $_POST['country'];
     $POSTAL = $_POST['postal_code'];
     $FLOOR = $_POST['floor'];
     $STREET = $_POST['street'];
     $PHONE = $_POST['phone'];
     
     $insert = "INSERT INTO address (apartment , building , city , country , postal_code , floor , street , phone) VALUES('$APARTMENT','$BUILDING','$CITY','$COUNTRY','$POSTAL','$FLOOR','$STREET','$PHONE')";
     mysqli_query($conn , $insert);
     if(move_uploaded_file($image_location,'images/'.$image_name)){

        echo "<script>alert('Product has been uploaded')</script>";
     }
    else {
        echo "<script>alert('Product has not been uploaded')</script>";
    }
    header('location: index.php');
}

if(isset($_POST['back'])){
   
    header('location: index.php');
}

?>