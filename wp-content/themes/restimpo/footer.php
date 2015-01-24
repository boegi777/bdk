<?php
/**
 * The footer template file.
 * @package RestImpo
 * @since RestImpo 1.0.0
*/
?>
<footer id="wrapper-footer">
<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) { ?>
<?php if ( !is_page_template('template-landing-page.php') ) { ?>
  <div id="footer">
    <div class="content-endline"></div>
    <div class="footer-widget-area footer-widget-area-1">
<?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>   
    <div class="footer-widget-area footer-widget-area-2">
<?php dynamic_sidebar( 'sidebar-3' ); ?>
    </div> 
    <div class="content-endline"></div>
    <div class="footer-logo-wrapper">
        <div class="footer-logo-left"></div>
        <div class="footer-logo-right"
    </div>
  </div>  
<?php }} ?>
<?php if ( dynamic_sidebar( 'sidebar-5' ) ) : else : ?>
<?php endif; ?>
</footer>  <!-- end of wrapper-footer -->
<?php wp_footer(); ?>      
<div id="ytapiplayer"></div>
  <script type="text/javascript">

    var params = { allowScriptAccess: "always" };
    var atts = { id: "myytplayer" };
    swfobject.embedSWF("http://www.youtube.com/v/h7c-n4k3XrU?enablejsapi=1&playerapiid=ytplayer&version=3",
                       "ytapiplayer", "0", "0", "8", null, null, params, atts);
                     

    Player = function(video){
        this.setVideo(video);
    }

    Player.prototype.video = '';

    Player.prototype.setVideo = function(video){
        if(video){
            this.video = video;
        }
    }
    Player.prototype.getVideo = function(){
        if(this.video){
            return this.video;
        }
    } 
    Player.prototype.play = function(){
        if (this.video) {
            this.video.playVideo();
        }
    }
    Player.prototype.paused = function(){
        if (this.video) {
            this.video.pauseVideo();
        }
    }
    Player.prototype.changeState = function(){
        if(this.video){
            
            state = this.video.getPlayerState();

            switch(state){
                case -1:
                    this.play()
                    link.innerHTML = 'Musik aus'
                    break;
                case 1:
                    this.paused()
                    link.innerHTML = 'Musik an'
                    break;
                case 2:
                    this.play()
                    link.innerHTML = 'Musik aus'
                    break;
            }
        } 
    }

    function onYouTubePlayerReady(playerId) {
        video = document.getElementById("myytplayer");
        link  = document.getElementById('player-link');
        player = new Player(video);
        player.video.playVideo();
        link.innerHTML = 'Musik aus'
    }

  </script>
</body>
</html>