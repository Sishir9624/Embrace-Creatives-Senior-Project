<?php
    
define('DBINFO','mysql:host=gator3033.hostgator.com;dbname=ecreativ_EmbraceCreatives');
define('DBUSER','ecreativ_ecreati');
define('DBPASS','Pass1234');

function performQuery($query){
    $con = new PDO(DBINFO,DBUSER,DBPASS);
    $stmt = $con->prepare($query);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }

?>