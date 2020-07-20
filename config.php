<?php

$serverName = "171.244.23.236"; //serverName\instanceName
$connectionInfo = array( "Database"=>"ANBINH", "UID"=>"pdc.anbinh.vtp", "PWD"=>'$H_Uu7$KUHn4bFX');
$conn = sqlsrv_connect( $serverName, $connectionInfo);
// Check connection
// Check connection
if ($conn) {
  // echo "Connected successfully.<br />";
}else{
  echo "Fail!.<br />";
  die(print_r(sqlsrv_errors(), true));
}
$sql = "SELECT BookingCode, DepartureAirportCode FROM tblBooking ";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['BookingCode'].", ".$row['DepartureAirportCode']."<br />";
}

sqlsrv_free_stmt( $stmt);


?>