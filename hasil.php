<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Untitled Document</title> 
</head> 
<body> 
<?php 
 
$nilai1 = $_POST['nilai1']; 
$nilai2 = $_POST['nilai2']; 
$operator = $_POST['operator']; 
 
if ($operator == "Penjumlahan") 
{ 
 $hasil = $nilai1 + $nilai2; 
 $tanda = "+";  
 } 
else if ($operator == "Pengurangan") 
{ 
 $hasil = $nilai1 - $nilai2; 
 $tanda = "-"; 
 } 
else if ($operator == "Perkalian") 
{ 
 $hasil = $nilai1 * $nilai2; 
 $tanda = "*";  
 } 
else if ($operator == "Pembagian") 
{ 
 $hasil = $nilai1 / $nilai2; 
 $tanda = "/"; 
 } 

 ?> 
 
<div align="center"> 
<table width="411" height="156" border="1"> 
<tr> 
<td colspan="2"><div align="center">Hasil Perhitungan</div></td> 
</tr> 
<tr> 
<td>Nilai Pertama</td> 
<td>&nbsp; <?php echo "$nilai1"; ?></td> 
</tr> 
<tr> 
<td>Operator</td> 
<td>&nbsp; <?php echo "$tanda"; ?></td> 
</tr> 
<tr> 
<td>Nilai kedua</td> 
<td>&nbsp; <?php echo "$nilai2"; ?></td> 
</tr> 
<tr> 
<td>Hasil</td> 
<td>&nbsp; <?php echo "$hasil"; ?></td> 
</tr> 
</table> 
</div> 
</body> 
</html>