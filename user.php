<?php
if( isset( $_POST['submit_form'] ) )
{
 validate_data($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($data);
  return $data;    
 }

 $cedula = validate_data( $_POST['cedula'] );
 $nombre = validate_data( $_POST['nombre'] );
 $pass = validate_data( $_POST['pass'] );
 $email = validate_data( $_POST['email'] );
 $type = validate_data( $_POST['type'] );
 $comment = validate_data( $_POST['comment'] );

 $host = 'localhost';
 $user = 'root';
 $pass = ' ';

 mysql_connect($host, $user, $pass);
 mysql_select_db('usuario');

 $insertdata=" INSERT INTO usuarios VALUES( '$cedula','$nombre','$pass', '$email', $type, $comment ) ";
 mysqli_query($insertdata);
}
?>