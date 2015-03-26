$(document).ready(function() {
	$('#francemap').vectorMap(
		{
		    map: 'france_fr',
			hoverOpacity: 0.5,
			hoverColor: "#EC0000",
			backgroundColor: "#ffffff",
			color: "#309ac1",
			borderColor: "#000000",
			selectedColor: "#EC0000",
			onRegionOver: function(event, code, region)
			{
				$("[id_map="+code+"]").addClass("region_survoler");
			},
			onRegionOut: function(event, code, region)
			{
				$("[id_map="+code+"]").removeClass("region_survoler");
			},
		    onRegionClick: function(element, code, region)
		    {

		    }
		}
	);
});