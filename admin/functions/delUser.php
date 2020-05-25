<?php

include ('E:/xampp/xampp/htdocs/php/Blog1/config/database.php');

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

$query = $pdo ->prepare("DELETE FROM usuario WHERE id = :id");
$query->bindValue(':id', $id);

$query->execute();

header('location: http://localhost/php/Blog1/admin/?page=user');

?>