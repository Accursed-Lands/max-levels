<?

if ($_REQUEST['func'] == "getStatLevels" && $_REQUEST['stat'] <> '') {
	$stats = getStats();
	if (isset($stats[$_REQUEST['stat']])) {
		getStatLevels($_REQUEST['stat']);
	}
}

/*
 * This function returns the stats available in game.
 */
function getStats() {
	$stats = array(
		'aura' => 'Aura',
		'balance' => 'Balance',
		'dexterity' => 'Dexterity',
		'health' => 'Health',
		'intelligence' => 'Intelligence',
		'reaction_speed' => 'Reaction Speed',
		'stamina' => 'Stamina',
		'strength' => 'Strength',
		'will' => 'Will'
		);
	return $stats;
}

function getStatLevels($stat) {
	$levels = array(
		'aura' => array('Average', 'Slightly Above Average', 'Above Average', 'Fairly Powerful', 'Powerful', 'Very Powerful', 'Extremely Powerful', 'Unbelievably Powerful'),
		'balance' => array('Average', 'Slightly Above Average', 'Above Average'),
		'dexterity' => array('Average', 'Slightly Above Average', 'Above Average', 'Fairly Good', 'Good', 'Very Good', 'Extremely Good', 'Incredible'),
		'health' => array('Average', 'Slightly Above Average', 'Above Average', 'Fairly Robust', 'Robust', 'Very Robust', 'Extremely Robust', 'Incredibly Robust'),
		'intelligence' => array('Average', 'Slightly Above Average', 'Above Average', 'Fairly High', 'High', 'Very High', 'Extraordinarily High', 'Unbelievably High'),
		'reaction_speed' => array('Average', 'Slightly Above Average', 'Above Average', 'Fairly Fast', 'Fast', 'Very Fast', 'Extremely Fast', 'Lightning Fast'),
		'stamina' => array('Average', 'Slightly Above Average', 'Above Average', 'Fairly Good', 'Abundance', 'Great Abundance', 'Incredible Abundance', 'Amazing Abundance'),
		'strength' => array('Average', 'Slightly Above Average', 'Above Average', 'Fairly Great', 'Great', 'Very Great', 'Extreme', 'Monstrous'),
		'will' => array('Average', 'Slightly Above Average', 'Above Average', 'Fairly Good', 'Powerful', 'Very Powerful', 'Extremely Powerful', 'Iron')
		);
	echo json_encode($levels[$stat]);
}
?>