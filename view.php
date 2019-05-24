<?php
require_once 'connection.php';
$id = new \MongoDB\BSON\ObjectId($_GET['id']);
$filter = ['_id' => $id];
$query = new MongoDB\Driver\Query($filter);          
$article = $client->executeQuery("universitati.universitati", $query);
$doc = current($article->toArray());
?>

<ul>
    <li><?php echo $doc->nume;?></li>
    <li><?php echo $doc->vechime;?></li>
    <li><?php echo $doc->locatie;?></li>
    
    
</ul>
<a href="index.php">Back</a>