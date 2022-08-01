<?php
require_once '../config/database.php';

$query=' SELECT * FROM user';

$req= $db->prepare($query);
$req->execute();

$users= $req->fetchAll();
echo sizeof($users);