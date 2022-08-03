<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."calendario_v1/lib/html/header.php"); ?>
<?php
$date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo ')); ?>

<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE. 'calendario_v1/controllers/ControleAdd.php'; ?>">
  Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
  Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
  Pessoa: <input type="text" name="title" id="title"><br>
  Observação: <input type="text" name="description" id="description"><br>
  Duração da Reunião: <select name="horasAtendimento" id="horasAtendimento">
    <option value="">Selecione</option>
    <option value="1">1h</option>
    <option value="2">2h</option>
    <option value="3">3h</option>
    <option value="4">4h</option>
    <option value="5">5h</option>
    <option value="6">6h</option>
</select><br>
<input type="submit" value="Agendar Horário">
</form>

<?php include(DIRREQ."calendario_v1/lib/html/footer.php"); ?>
