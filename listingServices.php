<?php

include("dbConnect.php");
class listings extends Dbh{

    // function -> get data from database/run your sql query

    function getData(){
        $sql = "SELECT * FROM RESTAURANT";
        $stmt = $this->connect()->query($sql);

        $result = array();
        while($row = $stmt->fetchAll()){
            array_push($result, $row);
            return($result);
        }
    }

}


?>