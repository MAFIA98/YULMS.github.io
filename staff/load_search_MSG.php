<?php
include"connect.php";
$table = '' ;
$c = 1; 
if(isset($_POST["search_key"]))
{
	$sdata=$_POST["search_key"];
	if ($_POST['search_key'] !='')
	{
		$sql="SELECT msg_id,msg_text,msg_link FROM message_table WHERE (msg_id like '%$sdata%'|| msg_text like '%$sdata%'||msg_link like '%$sdata%') ORDER BY  msg_id DESC" ;
	}
	else
	{
		$sql="SELECT msg_id,msg_text,msg_link FROM message_table msg  ORDER BY  msg_id DESC ";
	}
	$serv=$_SERVER['PHP_SELF'];
	 $result = mysqli_query($conn,$sql) ; 
	 if(mysqli_num_rows($result)<1)
	 {
	 	$table.='<tr> <th colspan="4" class="text-center"> NO DATA FOUND </th> </tr> ' ;
	 }else
	 {
	while($row=mysqli_fetch_assoc($result))
{
  $msg_id=$row['msg_id'];

  $table.="<tr>";
  $table.= "<td>".$row['msg_id']." </td>";
  $table.= "<td>".$row['msg_text']." </td>";
  $table.= "<td><a href='".$row['msg_link']."'>".$row['msg_link']."</a> </td>";
  $table.= "<td>

     <!-- Button trigger modal -->
          <button name='reply' id='$msg_id' class='btn btn-block btn-warning reply_data_btn'>
          <i class='fa fa-reply'></i> Reply
        </button>
 </td></tr> ";

                
 

}}
     echo $table;
}
?>