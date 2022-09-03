<?php
require 'config/db.php';


$uploadFile = 'images/' . $_FILES['file']['name'];
$type = ["jpg", "jpeg", "png"];
$uploadFileType = $_FILES['file']['type'];

if ($uploadFileType === "image/jpeg" || $uploadFileType === "image/jpg" || $uploadFileType === "image/png") {
    if (!empty($_FILES['file']['tmp_name'])) {
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
        $sql = "INSERT INTO `images`(`id`, `image`) VALUES (NULL,'$uploadFile')";
        if (mysqli_query($connect, $sql)) {
            echo 'Your file successfully uploaded!';
        } else {
            echo 'File isn`t upload!';
        }
    }
}else{
    echo 'Wrong file type';
}

