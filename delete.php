<?php
require_once 'connection.php';
$bulk = new MongoDB\Driver\BulkWrite;
$id = new \MongoDB\BSON\ObjectId($_GET['id']);
$filter = ['_id' => $id];

$bulk->delete($filter);

$client->executeBulkWrite('universitati.universitati',$bulk);

header('location:index.php');
?>