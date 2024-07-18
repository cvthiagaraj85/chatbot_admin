<?php
// include("include/config.php");
// $action=$_POST['action'];

// if($action =='allusersmonthwise')
// {
// 	global $db;
// 	$allusercount=[];
//     $year= $_POST['year'];



    
// 	$sql = "SELECT YEAR(`DATE`) AS y, MONTH(`DATE`) AS m, COUNT(DISTINCT `ID`) AS count FROM existing_client where YEAR(`DATE`) = '".$year."' GROUP BY y, m";
//     $result = mysqli_query($db,$sql);      
//     $row = mysqli_num_rows($result);      
//     $existing_client_count = mysqli_num_rows($result);
//     $row = mysqli_fetch_array($result);

//     print_r($row);

//     exit;

//     $data=[];
//     while($row = mysqli_fetch_array($result)) {

//         $data['Year'] = $row['y']; 
//         // $data['Month'] = $row['m']; 
//         // $data['Count'] = $row['count']; 
//     }

//     echo json_encode($data);

//     // $sql1 = "SELECT * FROM job_seeker";
//     // $result1 = mysqli_query($db,$sql1);      
//     // $row1 = mysqli_num_rows($result1);      
//     // $job_seeker_count = mysqli_num_rows($result1);

//     // $sql2 = "SELECT * FROM new_client";
//     // $result2 = mysqli_query($db,$sql2);      
//     // $row2 = mysqli_num_rows($result2);      
//     // $new_client_count = mysqli_num_rows($result2);

//     // $allusercount['existing_client']=$existing_client_count;
//     // $allusercount['job_seeker']=$job_seeker_count;
//     // $allusercount['new_client']=$new_client_count;
//     // $allusercount['overall_count'] = $existing_client_count+$job_seeker_count+$new_client_count;

//     //return $allusercount;
//}


include("include/config.php");
$action=$_POST['action'];
 
if($action =='allusersmonthwise')
{
    //global $con;
    $allusercount=[];
    $year= $_POST['year'];
 
    $sql = "SELECT YEAR(`DATE`) AS y, MONTH(`DATE`) AS m, COUNT(DISTINCT `ID`) AS count FROM existing_client where YEAR(`DATE`) = '".$year."' GROUP BY y, m";
 
    //$result = $con->query($sql);
     $result = mysqli_query($db,$sql);
     $json_response = array();
 
     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        // Fetch data of Fname Column and store in array of row_array
        $row_array['Year'] = $row['y'];
        $row_array['Month'] = $row['m'];
        $row_array['Count'] = $row['count'];
 
        //push the values in the array
        array_push($json_response, $row_array);
    }

    foreach ($json_response as $value) {
    echo  $value['Year'];
}
 
 
    $val = json_encode($json_response);
    $data = json_decode($val, true, JSON_UNESCAPED_SLASHES);
 
    print_r($json_response);
 
 
}

?>