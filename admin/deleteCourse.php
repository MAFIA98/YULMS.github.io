<?php
session_start();
include"connect.php";
$cid=$_GET['c_id'];
$sql="DELETE FROM take_relation WHERE course_id= $cid;" ; 
$sql.="DELETE FROM teach_in_relation WHERE course_id= $cid;" ; 
$sql.="DELETE FROM course_table WHERE course_id= $cid;" ;
 /*$sql="DELETE course_table,take_relation,teach_in_relation  
       FROM course_table as crs
    
     INNER JOIN take_relation as tk on crs.course_id = tk.course_id  
     INNER JOIN teach_in_relation as th on crs.course_id = th.course_id 
     WHERE
    crs.course_id =$cid";*/


$result =mysqli_multi_query($conn,$sql) ; 
if ($result)
{
	 $_SESSION['msg']=1 ; 
    header('Location:Course.php'); 
}
else
{
	$_SESSION['err'] = mysqli_error($conn); 
	 $_SESSION['msg']=2 ; 
    header('Location:Course.php'); 
}

?>