<?php


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



include_once '../config/Db.php';
include_once '../object/Department.php';

$database = new Db();
$db = $database->getConnection();


$department = new Department($db);


$department->id = filter_input(INPUT_GET, 'id');

if ($department->delete()) {
    echo '{';
    echo '"message": "Department was deleted."';
    echo '}';
}


else {
    echo '{';
    echo '"message": "Unable to delete department."';
    echo '}';
}
?>