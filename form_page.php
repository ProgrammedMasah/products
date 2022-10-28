<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <style>
        body{margin: 25px;}
        input{width: 500px;}
        #picture{border: 1px solid black;
                 width: 505px;}
    </style>
</head>
<body>
    <h1>Add New Product</h1>
    <br>
    <form method="post" action="/insert_into_database.php" 
          enctype="multipart/form-data">
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" required> <br><br>
        <label for="price">Price</label><br>
        <input type="number" name="price" id="price" required> <br><br>
        <label for="picture">Picture URL</label><br>
        <input type="file" name="picture" id="picture" required> <br><br><br>
        <input type="submit" name="save" value="save">
    </form>
</body>
</html>
