<?php
include_once ('Conn/conn.php');
mysql_select_db($database_conn, $conn);
     $sql = "SELECT fkey, email, pw FROM ownership";
     $res = mysql_query($sql);
     $result = array();
      while ($row = mysql_fetch_array($res))
      	array_push($result, array('fkey' => $row[0],
      	'email' => $row[1],
      	'pw' => $row[2]));
      echo json_encode(array('result' =>$result));
      ?>
      <?php
/*$currdir= getcwd();
if (mkdir($currdir . "/filex", 0777)){
	echo 'directory created';
} else {echo 'not created';}
*/
      ?>