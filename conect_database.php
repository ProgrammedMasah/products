<?php
// Create connection
$conn = mysqli_connect("sql780.main-hosting.eu","u508226309_masah_store","PASSword?q=masah_store_1","u508226309_masah_store");
// Check connection
if(!$conn)
    echo "Failed to connect to MySQL". mysqli_connect_error();
