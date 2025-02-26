<?php 

include '../../config.php';

$admin = new Admin();

//note: if(isset) is given to execute particular echo, if is not present always first echo executed

if(isset($_GET['update_status']))
{
$id = $_GET['update_status']; //['mycid'] from managecutomer.php variable

$query=$admin->cud("UPDATE `resort` SET `resort_status`='approved' WHERE resort.resort_id=".$id,"approved");

echo "<script>alert('approved'); window.location.href='../resort_manage.php';</script>";
}
?>

<?php 
//delete
if(isset($_GET['delete_resort'])) 
{
  
  $id=$_GET['delete_resort'];
  $query=$admin -> cud("DELETE FROM `resort` WHERE `resort_id`=".$id,"deleted");
  echo "<script>alert('deleted successfully'); window.location.href='../resort_manage.php';</script>";
}
?>