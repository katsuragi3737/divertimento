<?php
//$db_connection = mysql_connect($db_host, $db_user, $db_password);

mysql_connect('localhost', 'root', 'usbw') or die ('No se puede conectar con la base de datos'); 
mysql_select_db ('divertimento') or die ('No se puede seleccionar la base de datos'); 

$subs_name = $_POST['usuario'];
$subs_last = $_POST['contra'];

$sql = "SELECT * FROM login WHERE usuario='$subs_name' "; 
$rs = mysql_query ($sql) or die (mysql_error ()); 


if (mysql_num_rows ($rs) > 0)
{
    if($subs_name == "Jerry_Cano")
    {
        
      header('Location: ../html/Success.html'); 
    }
    
    if($subs_name == "Maria_Calero")
    {
        header('Location: ../html/atraccion_2.html'); 
              
    }
    
    if($subs_name == "Helmut_Colin")
     {
        
      header('Location: ../html/mantenimiento_2.html'); 
        
     }    
}     

  else
  {
      
     header('Location: ../html/Fail.html'); 
  }

?>