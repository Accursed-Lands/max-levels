$(document).ready (function() {
	$('#getFinalLevelBtn').click (function() {
		$finalStatVal = 'create_ajax_func';
		$('#finalStatLevelContainer').show();
		$('#finalStatLevel')
			.show()
			.val($finalStatVal);
	});
	
	$('#stat').change (function() {
		var stat = $(this).val();
		$('#finalStatLevelContainer, #finalStatLevel').hide();
		var statName = $('#stat option:selected').text();
		$('#statName').html(statName);
		$('#getFinalLevelBtn').prop('disabled', true);
		$.getJSON("http://accursedlands.zenira.com/common/functions/stat.php?func=getStatLevels&stat="+stat, function(statLevels) {
			$('#stat_level option:not(:first)').remove();
			$.each(statLevels, function(key, value){
				$('#stat_level').append('<option value=' + key + '>' + value + '</option>');
			});
			$('#stat_level option:first').prop('selected', true);
			$('#getFinalLevelBtn').prop('disabled', false);
		});
	});
});