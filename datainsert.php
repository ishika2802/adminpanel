<?php
    
$con = mysqli_connect("localhost", "root", "", "adminpanel");
      if(!$con){
        die(mysqli_connect_error());
      }
      
      if($_POST){      
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
       $lname = mysqli_real_escape_string($con, $_POST['lname']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $dob = mysqli_real_escape_string($con, $_POST['dob']);
      $degree = mysqli_real_escape_string($con, $_POST['degree']);
      $joinyear =mysqli_real_escape_string($con, $_POST['joinyear']);
      }
      $q = mysqli_query($con, "insert into fetch_data(fname, lname, email, dob, degree, joinyear) values('$fname', '$lname', '$email', '$dob', '$degree', '$joinyear')") or die(mysqli_connect_error($con));

      if($q){
        echo"<script>alert('Data Recorded');window.location ='index.php';</script>";
      }

?>