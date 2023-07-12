<?php
include './adminquery.php';
include '../connection/conn.php';

// show all user
function allUser($con)
{
    $query = DisplayAllUsers($con);
    return $query;
}
// insert user 
function IntrestedUsers($con)
{
    $query = DisplayAllInterestedUsers($con);
    return $query;
}
function logingpage($con){
    session_start();
    if (isset($_SESSION['name'])) {
        header('location: ./dashbord.php');
        exit();
    
}}

function service($con)
{
    if (isset($_POST['serviceSubmit'])) {
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $targetDir = "../assets/uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
        $imagePath = "assets/uploads/" . basename($_FILES["image"]["name"]);
        serviceQuery($con, $name, $imagePath);
    }
}


?>
