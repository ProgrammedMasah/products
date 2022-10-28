<?php
include './conect_database.php';


$sql_select = 'SELECT * FROM products';
$result = mysqli_query($conn, $sql_select);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

include'./close_database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
    body{margin: 50px;}
    .cards{margin-bottom: 40px;}
    .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    padding: 10px;
    }
    .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    img{
        width: 600px;
        height: 300px;
        float: left;
    }
    p{font-size: 50px;}
    .title{
        font-size: 40px;
        margin: 0 0 25px 650px;
    }
    .price{
        font-size: 25px;
        margin: 0 0 10px 650px;
    }
    .det{
        font-size: small;
        margin: 170px 0 20px 650px;
    }
    </style>
</head>
<body>
    <p>Shopping With HP </p>
    <?php foreach($products as $product) : ?>
    <div class="cards">
        <div class="card">
            <img src=" <?php echo $product['picture'] ?> ">
            <p class="title"><?php echo htmlspecialchars($product['title']) ?></p>
            <p class="price"><?php echo htmlspecialchars($product['price']) ?> $</p>
            <p class="det"><?php echo htmlspecialchars($product['deta']) ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</body>
</html>
