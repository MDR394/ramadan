



<?php
$con = mysqli_connect('localhost', 'root');
if ($con) {
    echo 'Connection Successfully';
} else {
    echo 'No Connection';
}

mysqli_select_db($con, 'ramzan');

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = "INSERT INTO data ( name, email, comment) VALUES ('$name', '$email', '$comment')";

mysqli_query($con, $query);

echo $query;
header('location:index.html');


?>
