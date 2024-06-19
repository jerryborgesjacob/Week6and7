<?php
include('functions.php');

    if (isset($_POST['addSchool'])) {
        
        $schoolName = $_POST['schoolName'];
        $schoolLevel = $_POST['schoolLevel'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        
        include('../reusable/conn.php');

        $query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`) VALUES
                                     ( '". mysqli_real_escape_string($connect, $schoolName) ."',
                                     '". mysqli_real_escape_string($connect, $schoolLevel) ."',
                                     '". mysqli_real_escape_string($connect, $phone) ."',
                                     '". mysqli_real_escape_string($connect, $email) ."')";

        $school = mysqli_query($connect, $query);

        if ($school) {
            set_message("School was Added succesfully.", "success");
            header("Location: ../index.php");
        } else {
            echo "Failed: " . mysqli_error($connect);
        }
    } else {
        echo "You should not be here!";
    }


