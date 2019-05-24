<?php
require_once 'connection.php';
$bulk = new MongoDB\Driver\BulkWrite;
if(isset($_POST["submit"])) {
 $data=array(
     '_id'=>new MongoDB\BSON\ObjectID,
    'nume'=>$_POST['nume'],
     'vechime'=>$_POST['vechime'],
     'locatie'=>$_POST['locatie']
    
    
    
    );
    $bulk->insert($data);
}
$client->executeBulkWrite('universitati.universitati',$bulk);
        
header('location:index.php');
?>