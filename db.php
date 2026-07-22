<?php

include 'db.php';

$name = $_POST['patient_name'];
$age = $_POST['age'];
$disease = $_POST['disease'];

$sql = "INSERT INTO patients
(patient_name,age,disease)
VALUES
('$name','$age','$disease')";

if(mysqli_query($conn,$sql))
{
    echo "Patient Added Successfully";
}
else
{
    echo "Error";
}

?>