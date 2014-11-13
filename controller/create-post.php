<?php
require_once(__DIR__ . "/../model/database.php");
//creats a connection to the database 
//using the directory


$connection = new mysqli($host, $username, $password, $database);
//
//new database
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //the $title is to get the title from the database 
    
$query = $connection->query("INSERT INTO posts SET title = '$title'. post = '$post'");
    
if($query) {
    echo "<p>sucessfully inserted post: $title</p>";

}
else{
echo "<p>$connection->error</p>";
}
    
    $connection->close();