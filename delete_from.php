<?php
 $con = mysqli_connect("localhost", "root", "", "adminpanel");
$id = $_GET['delete'];
$data1 = mysqli_query($con, "update fetch_data set isdelete = 1 where id='{$id}'") or die(mysqli_error($con));

if($data1){
   echo"<script>alert('data deleted');window.location='basic_table.php';</script>";
}



