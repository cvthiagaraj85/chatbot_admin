<?php
include("include/config.php");

function allUserCount()
{
	global $db;
	$allusercount=[];
	$sql = "SELECT * FROM existing_client";
    $result = mysqli_query($db,$sql);      
    $row = mysqli_num_rows($result);      
    $existing_client_count = mysqli_num_rows($result);

    $sql1 = "SELECT * FROM job_seeker";
    $result1 = mysqli_query($db,$sql1);      
    $row1 = mysqli_num_rows($result1);      
    $job_seeker_count = mysqli_num_rows($result1);

    $sql2 = "SELECT * FROM new_client";
    $result2 = mysqli_query($db,$sql2);      
    $row2 = mysqli_num_rows($result2);      
    $new_client_count = mysqli_num_rows($result2);

    $allusercount['existing_client']=$existing_client_count;
    $allusercount['job_seeker']=$job_seeker_count;
    $allusercount['new_client']=$new_client_count;
    $allusercount['overall_count'] = $existing_client_count+$job_seeker_count+$new_client_count;

    return $allusercount;
}

?>