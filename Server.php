<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $response = ["status" => "success", "message" => "Form data received and processed successfully"];
    echo json_encode($response);
} else {

    echo "Invalid request method";
}
?>
