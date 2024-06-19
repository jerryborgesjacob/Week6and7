<?php
    include('functions.php');
    if(isset($_POST['updateSchool'])){
    
    $id = $_POST['id'];
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    
    include('../reusable/conn.php');
    $query = "UPDATE `schools` SET `School Name`='$schoolName',
    `School Level`='$schoolLevel',
    `Phone`='$phone',
    `Email`='$email'
     WHERE `id`='$id'";
    
    $school = mysqli_query($connect, $query);

    if($school){
      header("Location: ../index.php"); 
      set_message("School was Added succesfully.", "success");
    }else{
      echo "Failed: " . mysqli_error($connect);
  }
  }
?>
