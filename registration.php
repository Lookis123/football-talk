<!DOCTYPE html>
<html>
<body>
<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
if (!empty($fname)){
if (!empty($lname)){
$host ='localhost';
$dbfname ='root';
$dblname = '';
$dbname ='tutor';  
//connection
$conn = new mysqli($host, $dbfname, $dblname, $dbname);
if(mysqli_connect_error()) {
    die('Connection Error ('.mysqli_connect_errno().') '
    .mysqli_connect_error());
}
else {
    $sql = 'INSERT INTO admission (fname, lname)
    values ('$fname', '$lname')';
    if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
}
else{
    echo "Error: ". $sql ."
    ". $conn->error;
}
$conn->close();
}
}
else {
    echo 'All inputs should be filled';
    die();
}
?>
</body>
</html>
