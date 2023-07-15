<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
else {
    $action = "";
}

switch ($action) {
    case 'add':
        if(isset($_POST['add_member'])) {
            $name = $_POST['name-input'];
            $yearold = $_POST['yearold-input'];
            $addr = $_POST['address-input'];
            $db->setData($name, $yearold, $addr);
        }
        require_once('View/members/add_member.php');
        break;

    case 'edit':
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $dataByID = $db->getData($id);
        }
        require_once('View/members/edit_member.php');
        break;

    case 'list':
        require_once('View/members/list.php');
        break;
    default:
        break;
}