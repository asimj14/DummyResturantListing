<?php

include("listingServices.php");

$myvar = isset($_POST[""])

if($myvar == "sdfs"){
    $result = json_encode(myData());
    echo ($result);

} 






function myData(){
    $requestedData = new listings();
    return $requestedData->getData();
}

?>