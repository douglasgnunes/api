<?php
// echo "<h1>GET</h1>";
// echo "<br>";
// $curl = curl_init();

// // Configura
// curl_setopt_array($curl, [
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_URL => 'http://localhost:8081/api/read.php'
// ]);

// // Envio e armazenamento da resposta
// $response = curl_exec($curl);
// var_dump($response);

// // Fecha e limpa recursos
// curl_close($curl);
// echo "<hr>";
// echo "<br>";

// echo "<h1>DELETE</h1>";
// echo "<br>";
// $curl = curl_init();

// // Configura
// // $data = [
// //     "id" => "2",
// //     "name" => "Faustão",
// //     "email" => "faustosilva@mail.com",
// //     "age" => "36",
// //     "designation" => "Apresentador",
// //     "created" => "2022-04-26 03:10:25"
// // ];
// $data = '{
//     "id":5
// }';
// curl_setopt_array($curl, [
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_URL => 'http://localhost:8081/api/delete.php',
//     CURLOPT_POST => 1,
//     CURLOPT_POSTFIELDS => $data
// ]);
// // Envio e armazenamento da resposta
// $response = curl_exec($curl);
// var_dump($response);
// // Fecha e limpa recursos
// curl_close($curl);

// echo "<h1>PUT</h1>";
// echo "<br>";
// $curl = curl_init();

// Configura
// $data = [
//     "id" => "2",
//     "name" => "Faustão",
//     "email" => "faustosilva@mail.com",
//     "age" => "36",
//     "designation" => "Apresentador",
//     "created" => "2022-04-26 03:10:25"
// ];
// $data = '{
//     "id" : "4",
//     "name" : "Faustão",
//     "email" : "faustosilva@mail.com",
//     "age" : "36",
//     "designation" : "Apresentador",
//     "created" : "2022-04-26 03:10:25"
// }';
// curl_setopt_array($curl, [
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_URL => 'http://localhost:8081/api/update.php',
//     CURLOPT_POST => 1,
//     CURLOPT_POSTFIELDS => $data
// ]);
// // Envio e armazenamento da resposta
// $response = curl_exec($curl);
// var_dump($response);
// // Fecha e limpa recursos
// curl_close($curl);

echo "<h1>POST</h1>";
echo "<br>";
$curl = curl_init();

$data = '{    
    "name" : "Gabriel",
    "email" : "gabriel@mail.com",
    "age" : "36",
    "designation" : "Apresentador",
    "created" : "2022-04-26 03:10:25"
}';
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost:8081/api/create.php',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $data
]);
// Envio e armazenamento da resposta
$response = curl_exec($curl);
var_dump($response);
// Fecha e limpa recursos
curl_close($curl);
