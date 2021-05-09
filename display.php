<?php
include 'connection.php';
$query = $conn->query("SELECT name,email,mobile,website,comment,gender FROM formdetails WHERE 1");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "users_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('name', 'email', 'mobile', 'website', 'comment', 'gender');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $lineData = array($row['name'], $row['email'], $row['mobile'], $row['website'], $row['comment'], $row['gender']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>
