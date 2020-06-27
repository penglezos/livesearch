$("#search").on("input", function() {
				
    if ($("#search").val()) {
        $("#results").load("search.php?key=" + encodeURI($("#search").val()) );
    } else {
        $("#results").html("");
    }
});
