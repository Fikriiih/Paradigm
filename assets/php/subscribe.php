<?php 

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "subscribe";


$email = $_POST['email'];


$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if(!$conn){
    die("Connection Failed : " .mysqli_connect_error());
}

$query = "INSERT INTO subscribe (email_address) VALUES ('$email')";

if (mysqli_query($conn, $query)) {
    echo "success";
} else {
    echo "<script type = 'text/javascript'>alert('failed'); </script>";
}
mysqli_close($conn);
header('Refresh: .1; URL=http://localhost/paradigm/index.html');

?>