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

if ($item->delete()) {
    echo json_encode("Cadastro deletado com sucesso.");
} else {
    echo json_encode("Não foi possível deletar o cadastro");
}
