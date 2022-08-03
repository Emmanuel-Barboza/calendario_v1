<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."calendario_v1/lib/html/header.php"); ?>
<?php
$objEvents=new \Classes\ClassEvents();
$events=$objEvents->getEventsById($_GET['id']);
$date=new \DateTime($events['start']);
?>

  <a id="delete" href="<?php echo DIRPAGE.'calendario_v1/controllers/ControleDelete.php?id='.$_GET['id']; ?>"><img src="<?php echo DIRPAGE.'calendario_v1/img/delete.png' ?>"></a>
<form name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE. 'calendario_v1/controllers/ControleEdit.php'; ?>">
  <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br> 
  Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
  Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
  Pessoa: <input type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br>
  Observação: <input type="text" name="description" id="description" value="<?php echo $events['description']; ?>"><br>
<input type="submit" value="Confirmar Horário">
</form>

<?php include(DIRREQ."calendario_v1/lib/html/footer.php"); ?>
