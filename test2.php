<?php
require_once 'connection.php';
$query=new MongoDB\Driver\Query([]);
$rows=$client->executeQuery("flori.flori",$query);
?>
<?php foreach ($rows as $val):?>
<?php if(isset($val->nume)):?>
<li><?php echo $val->nume;?></li>
<?php endif;?>
<?php endforeach; ?>
