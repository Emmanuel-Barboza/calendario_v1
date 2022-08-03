<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$idEvent = $_POST['id'];
$start = new \DateTime($_POST['start'],new \DateTimeZone('America/Sao_Paulo'));
$end = new \DateTime($_POST['end'],new \DateTimeZone('America/Sao_Paulo'));
$objEvents->updateDropEvent(
  $idEvent,
  $start->format("Y-m-d H:i:s"),
  $end->format("Y-m-d H:i:s")
);
