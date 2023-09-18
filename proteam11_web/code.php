<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    if (!empty($email)) {
        // Define the path to the text file where email addresses will be stored
        $file = "subscribers.txt";
        
        // Open the file in append mode and write the email address
        $fp = fopen($file, "a");
        if ($fp) {
            fwrite($fp, $email . PHP_EOL);
            fclose($fp);
            echo "Thank you for subscribing!";
        } else {
            echo "Error: Unable to subscribe at this time.";
        }
    } else {
        echo "Error: Email address is required.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
