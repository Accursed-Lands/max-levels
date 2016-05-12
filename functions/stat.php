<?
/*
 * This function returns the stats available in game.
 */
function getStats() {
	$stats = array(
		'strength' => 'Strength',
		'attack_speed' => 'Attack Speed',
		'dexterity' => 'Dexterity',
		'aura' => 'Aura',
		'intelligence' => 'Intelligence'
		);
	$stats = sort($stats);
	return $stats;
}
?>