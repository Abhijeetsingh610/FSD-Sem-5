<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $parts = explode("@",$email); 
    $username = $parts[0]; 

    if($username == "mitwpu.edu.in")
    {
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Message: " . $message . "<br>";
    }

    else{
        echo"Error";
    }

    // Display the submitted data
    
}
?>