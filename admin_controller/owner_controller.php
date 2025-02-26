<?php 

include '../../config.php';

$admin = new Admin();

//note: if(isset) is given to execute particular echo, if is not present always first echo executed

if(isset($_GET['update_status']))
{
$id = $_GET['update_status']; //['mycid'] from managecutomer.php variable

$query=$admin->cud("UPDATE `shopowner` SET `status`='approved' WHERE shopowner.owner_id=".$id,"approved");

echo "<script>alert('approved'); window.location.href='../shopowner_manage.php';</script>";
}
?>

<?php 
//delete
if(isset($_GET['delete_owner'])) 
{
  
  $id=$_GET['delete_owner'];
  $query=$admin -> cud("DELETE FROM `shopowner` WHERE `owner_id`=".$id,"deleted");
  echo "<script>alert('deleted successfully'); window.location.href='../shopowner_manage.php';</script>";
}
?>