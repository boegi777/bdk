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
        
        jQuery('.site-title a').hover( function(){
            jQuery('.site-title a').css({
                'color' : '#000000',
                'text-shadow'      : '0px 0px 6px #ffffff',
                'transition'       : '1s'
            });
            jQuery('.header-logo').css({
                'background-image' : 'url(wp-content/themes/restimpo/images/logo-hover.png)',
                'transition'       : '1s'
            });
        }, function(){
            jQuery('.site-title a').css({
                'color' : '#9B9B9B',
                'text-shadow'      : '0px 0px 6px #000000',
                'transition'       : '0s'
            }); 
            jQuery('.header-logo').css({
                'background-image' : 'url(wp-content/themes/restimpo/images/logo.png)',
                'transition'       : '0s'
            });       
        });
        
        jQuery('.header-logo').hover( function(){
            jQuery('.site-title a').css({
                'color'            : '#000000',
                'text-shadow'      : '0px 0px 6px #ffffff',
                'transition'       : '1s'
            });
            jQuery('.header-logo').css({
                'background-image' : 'url(wp-content/themes/restimpo/images/logo-hover.png)',
                'transition'       : '1s'
            });
        }, function(){
            jQuery('.site-title a').css({
                'color' : '#9B9B9B',
                'text-shadow'      : '0px 0px 6px #000000',
                'transition'       : '0s'
            });    
            jQuery('.header-logo').css({
                'background-image' : 'url(wp-content/themes/restimpo/images/logo.png)',
                'transition'       : '0s'
            });
        });

} );