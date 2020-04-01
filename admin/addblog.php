<?php
include_once 'database.php';
if(isset($_POST['submit']))
{    
     $postTitle = $_POST['postTitle'];
     $postCont = $_POST['postCont'];
     $postImg = $_POST['postImg'];
     $postDate = $_POST['postDate'];
 
     $sql = "INSERT INTO blog_posts (postTitle, postImg, postCont, postDate)
     VALUES ('$postTitle', '$postImg', '$postCont', '$postDate')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header("location:../blog.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);

     }
     mysqli_close($conn);
}
?>