<?php
    include ('E:/xampp/xampp/htdocs/php/Blog1/config/database.php');

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    $query = $pdo->prepare("UPDATE usuario SET nome = :nome, email = 
    :email, senha = :senha WHERE id = :id");

    $query->bindValue(':email', $email);

    $query->execute();
    ?>