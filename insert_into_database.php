<?php
include './conect_database.php';

if (isset($_POST["save"]))
{

    $title = $_POST['title'];
    $price = $_POST['price'];
    $date = date('y-m-d');
    
    $image_name = $_FILES['picture']['name'];
    $image_tmp_name = ($_FILES['picture']['tmp_name']);
    
    $folder = "./img/" . $image_name;

   move_uploaded_file($image_tmp_name, $folder);

    $sql = "INSERT INTO products (title, picture, price, deta) 
            VALUES('$title', '$folder', '$price', '$date')"; 
    
    if (empty($title))
    {
        echo "<script> alert('Please Enter the Titl'); </script>";
    }
    elseif(empty($price))
    {
        echo "<script> alert('Please Enter the Price'); </script>";
    }
    else 
    {
        if (mysqli_query($conn, $sql))
            header('location: /form_page.php');
        else
            echo "Error : " .mysqli_error($conn);
    }
}
 
include '/close_database.php';
