/* scroll-to-top.js v1.0 */
jQuery( function () {

	jQuery( 'body' ).prepend( '<div class="scroll-top"></div>');

	var scrollButtonEl = jQuery( '.scroll-top' );

	scrollButtonEl.hide();

	jQuery( window ).scroll( function () {
		if ( jQuery( window ).scrollTop() < 20 ) {
			jQuery( '.scroll-top' ).fadeOut();
		} else {
			jQuery( '.scroll-top' ).fadeIn();
		}
	} );

	scrollButtonEl.click( function () {
		jQuery( "html, body" ).animate( { scrollTop: 0 }, 300 );
		return false;
	} );
        
        /* Auslagern */
        jQuery('.header-logo').hover(function(){
            jQuery(this).css({
                'transition': 'background-image 1s',
                'background-image' : 'url(wp-content/themes/restimpo/images/logo-header-hover.png)'
            });
        }, function(){
            jQuery(this).css({
                'transition': 'background-image 1s',
                'background-image' : 'url(wp-content/themes/restimpo/images/logo-header.png)'
            });       
        });
        
        jQuery('.sw-text-block-right').each(function(){
            var hbefore = jQuery(this).prev('.sw-text-block-left').height();
            var height  = jQuery(this).height();
            if ( hbefore > height ){
                jQuery(this).css({
                    'height' : hbefore
                });
            }
        });

} );