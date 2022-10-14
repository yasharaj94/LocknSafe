<?php
//load the database configuration file
include 'connection.php';

$header = '';
$result ='';

$header .= 'locker_no'."\t".'Student Name1'."\t".'Phone'."\t".'Email'."\t".'Student Name2'."\t".'USN 1'."\t".'USN 2';

$prevQuery = "SELECT * FROM login";
$prevResult = $conn->query($prevQuery);
if($prevResult->num_rows > 0){
    while($row = $prevResult->fetch_assoc()) {
		$line = '';
		foreach( $row as $value ) {
			$value = str_replace('"','""',$value );
			$value = '"' . $value . '"' . "\t";
			$line .= $value;
		}
		$result .= trim($line)."\n";
    }
}

$result = str_replace( "\r" , "" , $result );

if ( $result == "" ) {

$result = "\nNo Record(s) Found!\n";

}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=export.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result";
