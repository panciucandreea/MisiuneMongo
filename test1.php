<?php
require_once 'connection.php';
$query=new MongoDB\Driver\Query([]);
$rows=$client->executeQuery("universitati.universitati",$query);
?>
<ul>
    <?php    foreach ($rows as $key=>$val):?>
    <li><?php var_dump($val);?></li>
    <?php    endforeach;?>
</ul>