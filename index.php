<?
	require_once('functions/stat.php');
	$stats = getStats();
?>
<style type="text/css">
	#finalStatValueContainer {padding:10px;background-color:#005a9b;font-size: 16px;}
	#finalStatValue {padding:5px;background-color:white;color:#005a9b;}
</style>
<h1>Max Levels</h1>
<form>
	<label for="stat">Stat:</label>
	<input type="select">
		<? foreach ($stats as $key=>$stat) { ?>
		<option value="<?=key?>"><?=$stat?></option>
		<? } ?>
	</input>
	<input type="submit" value="Get Final Value" />
</form>
<div id="finalStatValueContainer">
	<div id="finalStatValue"></div>
</div>