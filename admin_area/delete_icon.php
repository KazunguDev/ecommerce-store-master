<?php
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('login.php','_self')</script>";
} else {
?>
<?php
  if (isset($_GET['delete_icon'])) {
    $delete_id = $_GET['delete_icon'];
    $delete_icon = "DELETE FROM `icons` WHERE `icon_id`='$delete_id'";
    $conn = mysqli_connect("localhost", "sagwe", "sagwe1", "ecom_store");
    $run_delete = mysqli_query($conn, $delete_icon);
    if ($run_delete) {
      echo "<script>alert('One icon has been deleted')</script>";
      echo "<script>window.open('index.php?view_icons','_self')</script>";
    }
  }
?>

<?php } ?>