<?php 
include 'crud.php';
$action = $_REQUEST['action'] ? $_GET['action'] : '';
$method = new CRUD;
switch($action){
    case 'save':
    $method->save();
    break;

    case 'get_data':
    $method->get_data();
    break;

    case 'delete':
    $method->delete();
    break;
    case 'view':
    $method->index();
    break;

    default:
    $method->index();
    break;
}
?>