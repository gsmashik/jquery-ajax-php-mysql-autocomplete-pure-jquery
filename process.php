<?php
include("db.php");


$item_code = $_POST['item_code'];

if(!empty($item_code)  ){

$sql = " SELECT * FROM USER WHERE NAME LIKE '%" .$item_code ."%'  ";
$stmt = $pdo->prepare($sql);
$stmt->execute();?>
<ul class="w3-bar w3-ul w3-bar-block" id="autocomplete"><?php
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
<li class="w3-bar-item w3-button" onclick="sendvalue('<?php echo $row['name'];?>')">  <?php  echo $row['name'];?>
</li><?php


}?>
</ul><?php
}