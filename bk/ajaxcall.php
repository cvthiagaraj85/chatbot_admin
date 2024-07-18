<?php

include("include/config.php");

$action=$_POST['action'];
 
if($action =='allusersmonthwise')

{

    //global $con;

    $allusercount=[];

    $year= $_POST['year'];
 
    //echo $sql = "SELECT YEAR(`DATE`) AS y, MONTH(`DATE`) AS m, COUNT(DISTINCT `ID`) AS count FROM existing_client where YEAR(`DATE`) = '".$year."' GROUP BY y, m";
    // Exist
     $sql = "SELECT dd.mm as month, count(u.DATE) as count,MONTHNAME(CONCAT('2024-', dd.mm, '-01')) month_table from ( SELECT 1 mm UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12 ) dd left join existing_client u on dd.mm = month(DATE) and u.DATE > LAST_DAY(DATE_SUB(curdate(),INTERVAL 1 YEAR))  " ;

     if($year)
     {
        $sql.= "and YEAR(`DATE`) = '".$year."'";
     }
     $sql .= " group by dd.mm UNION ALL ";

     $sql.="SELECT dd.mm as month, count(u.DATE) as count,MONTHNAME(CONCAT('2024-', dd.mm, '-01')) month_table from ( SELECT 1 mm UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12 ) dd left join new_client u on dd.mm = month(DATE) and u.DATE > LAST_DAY(DATE_SUB(curdate(),INTERVAL 1 YEAR))";

      if($year)
     {
        $sql.= "and YEAR(`DATE`) = '".$year."'";
     }

     $sql .= "   group by dd.mm  UNION ALL ";

     $sql .= "SELECT dd.mm as month, count(u.DATE) as count,MONTHNAME(CONCAT('2024-', dd.mm, '-01')) month_table from ( SELECT 1 mm UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12 ) dd left join job_seeker u on dd.mm = month(DATE) and u.DATE > LAST_DAY(DATE_SUB(curdate(),INTERVAL 1 YEAR))";
      if($year)
     {
        $sql.= "and YEAR(`DATE`) = '".$year."'";
     }

     $sql .="  group by dd.mm";
 
    //$result = $con->query($sql);

     //echo $sql;

     $result = mysqli_query($db,$sql);

     $json_response = array();
 
     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        // Fetch data of Fname Column and store in array of row_array

        //$row_array['month'] = $row['month'];

        $row_array['month_name'] = $row['month_table'];

        $row_array['Count'] = $row['count'];

 
        //push the values in the array

        array_push($json_response, $row_array);

    }
 
 
    $val = json_encode($json_response);

    $data = json_decode($val, true, JSON_UNESCAPED_SLASHES);
 
    print_r($val);
 
 
}
 
?>
 