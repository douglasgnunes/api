<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once 'config/database.php';
include_once 'class/Api.php';
// $chave = true;

// if ($chave == true) {
$database = new Database();
$db = $database->getConnection();
$items = new Api($db);
$stmt = $items->getAll();
$itemCount = $stmt->rowCount();

echo json_encode($itemCount);
if ($itemCount > 0) {

    $employeeArr = array();
    $employeeArr["body"] = array();
    $employeeArr["itemCount"] = $itemCount;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "age" => $age,
            "designation" => $designation,
            "created" => $created
        );
        array_push($employeeArr["body"], $e);
    }
    echo json_encode($employeeArr);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Cadastro não encontrado.")
    );
}
// } else {
//     echo json_encode("Chave inválida");
// }
