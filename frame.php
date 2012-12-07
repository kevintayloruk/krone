<?
require_once("./functions.inc.php");
require_once("./database.inc.php");

//get_sites();
//get_frames(3);
echo $_POST["siteid"];
?>
<form method="post" action="frame.php">
        <label for="site">Site: </label>
        <select id="site" name="site">
<?
	$sites = get_sites();
	foreach ($sites as $siteid => $sitename) {
		echo '<option value="'.$siteid.'">'.$sitename.'</option>';
	}
?>
        </select>
<input type="submit" value="Holla!" id="submit-button" />  
</form>
