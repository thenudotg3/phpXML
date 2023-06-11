<?php

// Get the form data
$name = $_POST['name'];
$id = $_POST['id'];
$department = $_POST['department'];

// Load the existing XML data from the file
$xml = simplexml_load_file('xml files/employees.xml');

// Create a new employee element and add the data to it
$employee = $xml->addChild('employee');
$employee->addChild('name', $name);
$employee->addChild('id', $id);
$employee->addChild('department', $department);

// Save the updated XML data back to the file
$xml->asXML('xml files/employees.xml');

// Get the file information
$photo_name = $_FILES['photo']['name'];
$photo_tmp_name = $_FILES['photo']['tmp_name'];
$photo_size = $_FILES['photo']['size'];
$photo_error = $_FILES['photo']['error'];

$resume_name = $_FILES['resume']['name'];
$resume_tmp_name = $_FILES['resume']['tmp_name'];
$resume_size = $_FILES['resume']['size'];
$resume_error = $_FILES['resume']['error'];

// Move the uploaded files to a designated folder
if ($photo_error == UPLOAD_ERR_OK) {
    $photo_path = 'uploads/Resumes/' . $photo_name;
    move_uploaded_file($photo_tmp_name, $photo_path);
}

if ($resume_error == UPLOAD_ERR_OK) {
    $resume_path = 'uploads/Photoes/' . $resume_name;
    move_uploaded_file($resume_tmp_name, $resume_path);
}

//database connection 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "awttry";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Save data to database

$sql = "INSERT INTO employees (name, id, department, photo, resume)
        VALUES ('$name', '$id', '$department', '$photo_name', '$resume_name')";

if (mysqli_query($conn, $sql)) 
{
  echo "<script>alert('Employee data saved successfully');</script>";
  
  header('Location:index.php');
} 

else

{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>
