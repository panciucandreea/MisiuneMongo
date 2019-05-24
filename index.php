<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
       require_once 'connection.php';
        $query = new MongoDB\Driver\Query([]); 
        $rows = $client->executeQuery("universitati.universitati", $query);
?>
<table>
    <tr>
        <td>Nume</td>
        <td>Vechime</td>
        <td>Locatie</td>
       
        
           <td colspan="3">Actions</td> 
</tr>
<?php foreach($rows as $val):?> 
<tr>
    <td><?php echo $val->nume;?></td>
    <td><?php echo $val->vechime;?></td>
    <td><?php echo $val->locatie;?></td>
    
    
      <td><?php echo "<a href=\"view.php?id=".$val->_id."\">View</a>";?></td>
          <td><?php echo "<a href=\"edit.php?id=".$val->_id."\">Edit</a>";?></td>
          <td><?php echo "<a href=\"delete.php?id=".$val->_id."\"onclick=\"return confirm(Are you sure you want to delete this document?')\";>Delete</a>";?></td>
</tr>
 
    <?php endforeach;?>
</table>
        <a href="insert.php">Add a new record</a><br><br>
           
</body>
</html>