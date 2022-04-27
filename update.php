<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'config/database.php';
include_once 'class/Api.php';

$database = new Database();
$db = $database->getConnection();

$item = new Api($db);

$data = json_decode(file_get_contents("php://input"));

$item->id = $data->id;

// valores
$item->name = $data->name;
$item->email = $data->email;
$item->age = $data->age;
$item->designation = $data->designation;
$item->created = date('Y-m-d H:i:s');

if ($item->put()) {
    echo json_encode("Dados atualizados com sucesso.");
} else {
    echo json_encode("Não foi possível atualizar os dados");
}
