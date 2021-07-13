<?php
define ( 'DB_HOST', 'localhost' );
define ( 'DB_NAME', 'doctorappointmentsystem' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASSWORD', '' );
$con = mysqli_connect ( DB_HOST, DB_USER, DB_PASSWORD);
$db = mysqli_select_db ( DB_NAME, $con ) or die ( "Failed to connect to MySQLi: " . mysqli_error () );
session_start (); // starting the session for user profile page //
if (! empty ( $_POST ['user'] )) 
// checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysqli_query ("SELECT * FROM Login where email = '$_POST[user]' AND password = '$_POST[pass]'" ) or die ( mysqli_error () );
	$row = mysqli_fetch_array ( $query ) or die (mysqli_error () );
	
	if (! empty ( $row ['email'] ) and ! empty ( $row ['password'] )) {
		$_SESSION ['email'] = $row ['email'];
		$_SESSION ['role'] = $row ['role'];
		header ( 'Location:Home.php' );
	} else {
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
} else {
	echo "Enter username and password again";
}
?>

