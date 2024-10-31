<?php

include 'database.php';

    if(isset ($_POST['thumb_add'])){

        $th_title = $_POST['title'];
        $th_define = $_POST['define'];
        $file = $_FILES['image']['name'];

        $dst = "./image/".$file; //to store in local location folder name image

        $dst_db = "image/".$file;
        move_uploaded_file($_FILES['image']['tmp_name'], $dst);

        $sql = "INSERT INTO thumb (title, define, image)
                VALUES ('$th_title', '$th_define', '$dst_db')";
            
        $result2 = mysqli_query($conn, $sql);

        if($result2){
            header('location: thumb.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="anime_add.css">
</head>
<body>
    <div class="form-container">
        <form action="#" method="post" enctype="multipart/form-data">
            <h2>Adding To My Anime Collection</h2>
            <!-- Input Fields -->
            <label for="title">Title</label>
            <input type="text" id="lastName" name="title" required>

            <label for="define">Define</label>
            <input type="text" id="phone" name="define" required>
            <!-- Image Field -->
            <label for="profileImage">Upload Profile Image</label>
            <input type="file" id="profileImage" name="image" accept="image/*" required>
            <!-- Submit Button -->
            <button name="thumb_add" type="submit">Upload</button>
        </form>
    </div>
</body>
</html>