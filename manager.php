<?php

class Manager {

    
public function connectDb(){

require_once('BDD.php');

try{

$pdo_options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;

$dbh = new \PDO('mysql:host=' . $DB_HOST . ';dbname=' . $DB_NAME . ';charset=utf8', $DB_LOGIN, $DB_PASSWROD, $pdo_options);

} catch (Exception $e){

die('Erreur : ' . $e->getMessage());

}

return $dbh;
}

}

?>