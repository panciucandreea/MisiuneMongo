<?php
require_once 'connection.php';
$bulk = new MongoDB\Driver\BulkWrite;
if(!isset($_POST["submit"])){
$id = new \MongoDB\BSON\ObjectId($_GET['id']);
$filter = ['_id' => $id];
$query = new MongoDB\Driver\Query($filter);          
$article = $client->executeQuery("universitati.universitati", $query);
$doc = current($article->toArray());
}else{
 $data=[
        'nume'=>$_POST['nume'],
        'vechime'=>$_POST['vechime'],
        'locatie'=>$_POST['locatie']
    ];
 $id = new \MongoDB\BSON\ObjectId($_POST['id']);
$filter = ['_id' => $id];
    
$update=['$set'=>$data];
 $bulk->update($filter, $update);
 $client->executeBulkWrite('universitati.universitati',$bulk);
header('location:index.php');
}
?>

<h1>Editati inregistrarea</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="hidden" name="id" value="<?php echo $doc->_id;?>">
    Nume:<br><input type="text" name="nume" value="<?php echo $doc->nume;?>"><br/>
    Batalii:<br/><input type="text" name="vechime" value="<?php echo $doc->vechime;?>"><br>
    Ani:<br/><input type="text" name="locatie" value="<?php echo $doc->locatie;?>"><br>
   
    
    <input type="submit" name="submit" value="Update"><br>
</form>