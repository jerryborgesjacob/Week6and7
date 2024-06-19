<?php 
    include('../reusable/conn.php');
    include('functions.php');
    if(isset($_GET['deleteSchool'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM schools WHERE `id` = '$id'";
        $school = mysqli_query($connect, $query);

        if($school) {
            set_message('school was deleted succesfully', 'danger');
            header('Location: ../index.php');
        } else {
            echo "Failed:" . mysqli_error($connect);
        }
    } else {
        echo "Not Authorized";
    }