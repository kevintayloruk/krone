<?
require_once("./functions.inc.php");
require_once("./database.inc.php");

//get_sites();
//get_frames(3);
echo $_POST["siteid"];
?>
<form method="post" action="frame.php">
        <label for="site">Frame: </label>
        <select id="site" name="site">
<?
	$frames = get_frames($_POST["siteid"]);

var_dump($frames);
	foreach ($frames as $frameid => $framename) {
		echo '<option value="'.$frameid.'">'.$framename.'</option>';
	}
?>
        </select>
<input type="submit" value="Holla!" id="submit-button" />  
</form>
