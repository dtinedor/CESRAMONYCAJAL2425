<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'tareas'
) or die(mysqli_erro($mysqli));

?>
