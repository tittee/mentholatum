/* <![CDATA[ */
( function( $ ) {
	
	// for future use
    $(document).ready(function () {
        var headerTop = $('#header-section-vertical').offset().top;
        if ( headerTop > 100 ){
            $('#header-section-vertical').hide();
            $('#header-section').fadeIn('slow');
        }else{
            $('#header-section').hide();
            $('#header-section-vertical').fadeIn('slow');
        }
        var headerBottom = headerTop + 100; // Sub-menu should appear after this distance from top.
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop(); // Current vertical scroll position from the top
            if (scrollTop > headerBottom) { // Check to see if we have scrolled more than headerBottom
                if (($(".ha-header-perspective").is(":visible") === false)) {
                    //$('.ha-header-perspective').fadeIn('slow');
                    $('#header-section-vertical').hide();
                    $('#header-section').fadeIn('slow');
                }
            } else {
                if ($(".ha-header-perspective").is(":visible")) {
                    $('#header-section').hide();
                    $('#header-section-vertical').fadeIn('slow');
                }
            }
        });
    });
    
} )( jQuery );
 /* ]]> */	
