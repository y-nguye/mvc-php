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
            header("location: index.php?controller=member&action=list");
        }
        require_once('View/members/add_member.php');
        break;

    case 'edit':
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $dataByID = $db->getData($id);
            updateMember($id, $db);
        }
        require_once('View/members/edit_member.php');
        break;

    case 'list':
        require_once('View/members/list_members.php');
        break;

    case 'delete':
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $db->deleteData($id);
        }
        require_once('View/members/list_members.php');
        break;
    default:
        break;
}

function updateMember ($id, $db) {
    if(isset($_POST['update_member'])) {
        $name = $_POST['name-input'];
        $yearold = $_POST['yearold-input'];
        $addr = $_POST['address-input'];
        $db->updateData($id, $name, $yearold, $addr);
        header("location: index.php?controller=member&action=list");
    }
}