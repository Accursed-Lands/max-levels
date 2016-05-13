<?
	require_once('common/functions/stat.php');
	$stats = getStats();
?>
<style type="text/css">
	#finalStatLevelContainer {padding:10px;background-color:#005a9b;font-size: 16px;width:300px;display:none;color:#FFF;}
	#finalStatLevel {padding:5px;background-color:white;color:#005a9b;display:none;margin-top:10px;text-align:center;}
	label{width:100px;display:inline-block;}
	select{min-width:200px;}
</style>
<script type="text/javascript" src="common/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="common/js/max-stats.js"></script>
<h1>Max Levels</h1>
Select a stat and enter your character's starting level to find what max level your character is capable of.
<br /><br />
<form>
	<label for="stat">Stat:</label>
	<select id="stat" name="stat">
		<option value="" disabled="disabled" selected>- Select -</option>
		<? foreach ($stats as $key=>$stat) { ?>
		<option value="<?=$key?>"><?=$stat?></option>
		<? } ?>
	</select>
    <br /><br />
	<label for="stat_level">Stat Level:</label>
	<select id="stat_level" name="stat_level">
		<option value="" disabled="disabled" selected>- Select -</option>
	</select>
    <br /><br />
    <label for="getFinalLevelBtn"></label>
	<input type="button" value="Get Final Level" id="getFinalLevelBtn" />
</form>
<div id="finalStatLevelContainer">
	Max <span id="statName"></span>:<br />
    <div id="finalStatLevel">{TBD}</div>
</div>
