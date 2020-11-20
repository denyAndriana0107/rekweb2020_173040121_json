<?php
$mahasiswa = [
        [
        "nama"=> "Deny Andriana",
        "nrp"=>  "173040121",
        "email"=>"denyAndrian@mail.com"
        ],
        [
        "nama"=> "Maulana Suganda",
        "nrp"=>  "173040069",
        "email"=>"Suganda@mail.com"
        ],
];
$data = json_encode($mahasiswa);
echo $data;
?>
