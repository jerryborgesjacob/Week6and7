<?php 

$connect = mysqli_connect('localhost', 'root', 'root', 'phpweek6');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }