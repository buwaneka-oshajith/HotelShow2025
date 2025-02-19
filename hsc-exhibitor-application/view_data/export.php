<?php  
//export.php  
$connect = mysqli_connect("localhost", "hypervoi_application_form_fham", "HpvQlpoiR)mp", "hypervoi_fham_db");

// Include XLSX generator library 
require_once 'PhpXlsxGenerator.php';
 
// Excel file name for download 
$fileName = "fham-exhibitor-members-data_" . date('Y-m-d') . ".xlsx"; 
 
// Define column names 
$excelData[] = array('Person Name', 'Mobile Number', 'Company Name', 'Job Title', 'Email Address', 'Country', 'Remark'); 
 
// Fetch records from database and store in an array 
$query = $connect->query("SELECT * FROM fham_exhibitor_registration ORDER BY id ASC"); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 
        $lineData = array(
            $row['contact_per_title'] . ' ' . $row['first_name'] . ' ' . $row['last_name'],
            $row['mobile_ext'] . '-' . $row['mobile_number'],
            $row['comapany_name'],
            $row['job_title'],
            $row['email'],
            $row['country'],
            $row['remark'],
        ); 
        $excelData[] = $lineData; 
    }
} 
 
// Export data to excel and download as xlsx file 
$xlsx = CodexWorld\PhpXlsxGenerator::fromArray( $excelData ); 
$xlsx->downloadAs($fileName); 
 
exit; 
 
?>