<?

// HTML header

function html_header() {
?>
	<html>
		<head><title>KRONE Records</title></head>
		<body>
<?	
}

// HTML footer

function html_footer() {
?>
		</body>
	</html>
<?
}

// Return an array of site ID, Name
function get_sites() { 
	$query = "SELECT * from site";
	$result = mysql_query($query) or die(mysql_error());

	while( $row = mysql_fetch_assoc($result) ) {
		$data[$row["id"]] = $row["name"];
	}
	return $data;

}

// Return an array of areaid
function get_frames($site=-1) {
	$query = "SELECT * from frame";
	if ($site != -1) {
		$query .= " WHERE site =" . $site;
	}
        $result = mysql_query($query) or die(mysql_error());
        while( $row = mysql_fetch_row($result) )
                echo $row[2];

}

?>
