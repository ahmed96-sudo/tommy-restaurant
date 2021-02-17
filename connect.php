<?php
$conn = mysqli_connect("localhost","id13647457_ahmedsaeed","p8XbvBMugY@>6(<B","id13647457_myclients");
if (!$conn) {
  die("Connection Failed ". mysqli_connect_error());
}
$username = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$msg = mysqli_real_escape_string($conn, $_REQUEST['message']);

// attempt insert query execution
$sql = "INSERT INTO contacts (username, email, msg) VALUES ('$username', '$email', '$msg');";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute " . mysqli_error($conn);
}
mysqli_close($conn);

?>