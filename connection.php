<?php
  //Establish a connection to the database
  $mysqli = new mysqli('localhost', 'root', '', 'Databased_movie');

  //Check if there is an error when connecting to the database
  if($mysqli->connect_error){
    die($mysqli->connect_errno . ' : ' . $mysqli->connect_error);
  }
?>
