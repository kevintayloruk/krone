<?
require_once("./functions.inc.php");
require_once("./database.inc.php");
html_header();
//get_sites();
//get_frames(3);
?>
<form method="post" action="frame.php">
        <label for="siteid">Site: </label>
        <select id="siteid" name="siteid">
<?
	$sites = get_sites();
	foreach ($sites as $siteid => $sitename) {
		echo '<option value="'.$siteid.'">'.$sitename.'</option>';
	}
?>
        </select>
<input type="submit" value="Holla!" id="submit-button" />  
</form>
html_footer();
