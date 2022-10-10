<?php

header("Content-Type: application/json; charset=utf-8");

$data = file_get_contents("tugas_cloud.json");

echo $data;