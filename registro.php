<?php

require_once 'source/db_connect.php';

if(isset($_POST['signup-btn'])) {

      $username = $_POST['user-name'];
      $apellido = $_POST['user-apellido'];
      $email = $_POST['email'];
      $password = $_POST['user-pass'];
      $confirmar = $_POST['confirmar'];
      $poblacion = $_POST['poblacion'];
      $comentario = $_POST['comentario'];

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $existente = $conn->query("SELECT * FROM user where username = '$username' or email='$email'"); 
      if ($existente->rowCount()>0) 
      {
          echo "Nombre de Usuario y/o Email ya existente";
      }

      else if ($password!=$confirmar) 
      {
          echo "Las contraseñas no coinciden";
      }

      else 
      {

    try {
      echo "Datos guardados correctamente";
      $SQLInsert = "INSERT INTO user (username, apellido, password, email, poblacion, comentario, to_date)
                   VALUES (:username, :apellido, :password, :email, :poblacion, :comentario, now())";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':username' => $username, ':apellido' => $apellido, 
      ':password' => $hashed_password, ':email' => $email, ':poblacion' => $poblacion, 
      ':comentario' => $comentario));

      if($statement->rowCount() == 1) {
        header('location: index.html');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}

?>