<?php
$con = mysqli_connect("localhost", "root", "", "adminpanel");

if(!$con){
    die(mysqli_connect_error());
}   
    
    $data = mysqli_query($con, "select * from fetch_data where isdelete=0");
    echo"<table class=table table-hover>";
    echo"<tr>";
    echo"<th style=color:black;>Id</th>";
    echo"<th style=color:black;>FirstName</th>";
    echo"<th style=color:black;>LastName</th>";
    echo"<th style=color:black;>Email</th>";
    echo"<th style=color:black;>BirthDate</th>";
    echo"<th style=color:black;>Degree</th>";
    echo"<th style=color:black;>Join Year</th>";
    echo"<th style=color:black;>Action</th>";
    echo"</tr>";

       
        while($row = mysqli_fetch_array($data)){
        echo"<tr>";
        echo"<td style=color:black;>{$row['id']}</td>";
        echo"<td style=color:black;>{$row['fname']}</td>";
        echo"<td style=color:black;>{$row['lname']}</td>";
        echo"<td style=color:black;>{$row['email']}</td>";
        echo"<td style=color:black;>{$row['dob']}</td>";
        echo"<td style=color:black;>{$row['degree']}</td>";
        echo"<td style=color:black;>{$row['joinyear']}</td>";
        echo"<td style=color:black;><a href = 'delete_from.php?delete= {$row['id']};'>Delete</a></td>";
        echo"</tr>";
        }
    echo"</table>";
    