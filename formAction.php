<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "336trs.det2.admin@us.af.mil"; // Replace with your email address

    // Retrieve form data
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $phone_number = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $details = $_POST['details'];

    // Create email message
    $subject = "New form submission from $first_name $last_name";
    $message = "Name: $first_name $last_name\n";
    $message = "Phone: $phone_number\n";
    $message .= "Email: $email\n\n";
    $message .= "Details:\n$details";

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Thank you for your submission. We will contact you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Form not submitted.";
}
?>
