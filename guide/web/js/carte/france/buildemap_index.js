$(document).ready(function() {
	$('#francemap').vectorMap(
		{
		    map: 'france_fr',
			hoverOpacity: 0.5,
			hoverColor: "#EC0000",
			backgroundColor: "#ffffff",
			color: "#309ac1",
			borderColor: "#000000",
			selectedColor: "#309ac1",
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

	$("#francemap_liste li").hover(function(){
		var id_region = $(this).attr("id_map");
		var id_region_carte = "#jqvmap1_"+id_region;
		$("#francemap svg g "+id_region_carte).attr("fill-opacity","0.5");
	})

	$("#francemap_liste li").mouseleave(function(){
		var id_region = $(this).attr("id_map");
		var id_region_carte = "#jqvmap1_"+id_region;
		$("#francemap svg g "+id_region_carte).attr("fill-opacity","1");
	})
});