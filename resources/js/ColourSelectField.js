(function($) {

    $(function() {
        $('#types-ColourLimited_ColourSelect-addColourOption').click(function(e) {
			e.preventDefault();
			var clones = $('tr.clone');
			var lastRow = clones.last();
			var clone = lastRow.clone();
			var next = clones.length + 1;
			clone.find('input').attr('id','types-ColourLimited_ColourSelect-col'+next).attr('name','types[ColourLimited_ColourSelect][options][col'+next+']');
			clone.find('.code').html(clone.find('input').val());
			lastRow.after(clone);
			return false;
		});

		$(document).on('change', '.colour-select', function(e) {
		   var colour = $(e.currentTarget).val();
		   $(e.currentTarget).parent().parent().find('.code').html(colour);
		});

		$(document).on('click', '.remove-row', function(e) {
		    console.log(e);
		    $(this).parent().parent().remove();
		});
    });

})(jQuery);
