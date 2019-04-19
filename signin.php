<?php
error_reporting(0);

$login = $_POST["login"];
$password = $_POST["password"];

if(empty($login) || empty($password)) {
    echo "Veuillez renseignez vos identifiants";
    return;
}

$base=new SQLite3("chocodb");

$res = $base->query("SELECT * FROM users WHERE login LIKE '$login'");
$rows = $res->fetchArray();
if(empty($rows)) {
    echo "Cet utilisateur n'existe pas";
    return;
}

$res = $base->query("SELECT * FROM users WHERE login LIKE '$login' AND password LIKE '$password' LIMIT 1");
$user = $res->fetchArray();
if(empty($user)) {
    echo "Mauvais mot de passe";
    return;
}

session_start();
$_SESSION["id_user"] = $user["id_user"];
$_SESSION["prenom"] = $user["prenom"];
$_SESSION["age"] = $user["age"];
$_SESSION["admin"] = boolval($user["is_admin"]);