<?php
    session_start();
    function set_message($message, $className){
        $_SESSION['message'] = $message;
        $_SESSION['className'] = $className;

    }

    function get_message(){
        if(isset($_SESSION['message'])){ //isset checks if the variables exists or not
            echo '<div class =  "alert alert-' . $_SESSION['className'] . '"role="alert">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);

            unset($_SESSION['className']); //unset destroys the session variable
        }

    }
?>