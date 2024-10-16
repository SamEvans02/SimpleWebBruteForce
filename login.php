<!-- login.php -->
<?php
$valid_user = 'admin';
$valid_pass = 'password123';

if ($_POST['username'] == $valid_user && $_POST['password'] == $valid_pass) {
    echo "Login successful!";
} else {
    echo "Invalid credentials.";
}
?>
