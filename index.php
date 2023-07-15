<?php

include('Model/DBconfig.php');
$db = new DataBase;
$db->connect();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}
else {
    $controller = "";
}

switch ($controller) {
    case 'member':
        require_once('Controller/action.php');
        break;

    default:
        break;
}

?>