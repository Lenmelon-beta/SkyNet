<?php
//Getting user uploaded file
$file = $_FILES["file"];
//Saving file in the uploads folder
move_uploaded_file($file["tmp_name"], "Uploads/" . $file["name"]);
//Redirecting back to home
header("Location: Shared.php");
?>