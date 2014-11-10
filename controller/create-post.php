<?php
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //the $title is to get the title from the database 
    
    echo "<p>title: $title</p>";
    //this echos out the title above 
    echo "<p>post: $post</p>";
    //also with this is to echo out the post above
    //sends the information to the database