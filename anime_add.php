<?php
    include "database.php";

    if(isset($_POST['anime_add'])){

        $a_author = $_POST['author'];
        $a_title = $_POST['title'];
        $a_topic = $_POST['topic'];
        $a_define = $_POST['define'];
        $a_link = $_POST['link'];
        $a_description = $_POST['description'];
        $file = $_FILES['image']['name'];

        $dst = "./image/".$file; //to store in local location folder name image

        $dst_db = "image/".$file;
        move_uploaded_file($_FILES['image']['tmp_name'], $dst);

        //defining the name and the variable insertion to the table name in the my sql database
        $sql = "INSERT INTO collection (author, title, topic, define, link, description, image) 
                VALUES ('$a_author', '$a_title', '$a_topic', '$a_define', '$a_link', '$a_description','$dst_db')";

        $result = mysqli_query($conn, $sql); //to push to the database

        if($result){
            header('location: anime_add.php'); //this section helps remove the #(hashtag)from the header search bar after data is sent to the database
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="anime_add.css">
</head>
<body>
    <div class="form-container">
        <form action="#" method="post" enctype="multipart/form-data">
            <h2>Adding To My Anime Collection</h2>

            <!-- Input Fields -->
            <label for="author">Author</label>
            <input type="text" id="firstName" name="author" required>

            <label for="title">Title</label>
            <input type="text" id="lastName" name="title" required>

            <label for="topic">Topic</label>
            <input type="text" id="email" name="topic" required>

            <label for="define">Define</label>
            <input type="text" id="phone" name="define" required>

            <label for="link">Link</label>
            <input type="text" id="link" name="link"  required>

            <!-- Image Field -->
            <label for="profileImage">Upload Profile Image</label>
            <input type="file" id="profileImage" name="image" accept="image/*" required>

            <!-- Text Area -->
            <label for="message">Description</label>
            <textarea id="message" name="description" rows="6" required></textarea>

            <!-- Submit Button -->
            <button name="anime_add" type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
