<?php
try {
    $bdd= new PDO('mysql:host=localhost;dbname=allassane;','root','',
     array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
}
catch(exception $e){
    die("ERROR" . $e->getMessage());
}
?> 