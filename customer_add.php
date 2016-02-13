<?php
$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$fname = $_POST["fname"];
$lname = $_POST['lname'];
$addr = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql="INSERT INTO customers(firstName, lastName, address, city, state, zip, email, phone )
VALUES('$fname','$lname', '$addr', '$city', '$state', '$zip', '$email', '$phone')";
if ($conn->query($sql) === TRUE) {
    echo "<br/><br/><span>New customer details added successfully!!</span>";
} else {
    echo "<br/><br/><span>Error while inserting customer details!!</span>";;
}

$conn->close();
?>

<html>
    <body>
        &nbsp;&nbsp;<button type="submit" class="btn btn-default" onclick="location.href='customer_add.html'">Back</button>
    </body>
</html>
