<?php

$json = '[{"nome":"Jo\u00e30","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

?>