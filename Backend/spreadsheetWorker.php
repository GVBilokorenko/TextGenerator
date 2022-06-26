<?php
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$file = "./main.xlsx";
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load("main.xlsx");

function randomData($sheet, $cols, $a, $z){
  global $spreadsheet;
  $worksheet = $spreadsheet->getSheet($sheet)->toArray();

  $resArr = [];

  foreach ($cols as $col) {
    $resArr[] = $worksheet[rand($a - 1, $z - 1)][$col];
  }
  return $resArr;
}

function dataByTag($sheet, $cols, $tag, $tagCol){
  global $spreadsheet;
  $worksheet = $spreadsheet->getSheet($sheet)->toArray();

  $arr = [];

  foreach ($worksheet as $row) {
    if ($row[$tagCol] == $tag) {
      $arr[] = $row;
    }
  }

  $resArr = [];

  foreach ($cols as $col) {
    $resArr[] = $arr[rand(0, sizeof($arr) - 1)][$col];
  }
  return $resArr;
}

// {H2} Generation
//$h2 = "H1 ";
//$worksheet = $spreadsheet->getSheet(2)->toArray();
//$h2 .= $worksheet[rand(4, 11)][1];

// {Store} Generation
//$h2 = "H1 ";
//$worksheet = $spreadsheet->getSheet(2)->toArray();
//$h2 .= $worksheet[rand(4, 11)][1];

//foreach ($worksheet as $t) {
//  echo $t[0].",".$t[1]." \n";
//}
