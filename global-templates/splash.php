<div id="row homepage-splash" class="homepage-splash">
    <div class="sp-container">
    	<div class="sp-content">
    		<div class="sp-wrap sp-left col-md-6">
    			<h2>
    				<span class="sp-top">What if you could read</span>
    				<span class="sp-mid">the best</span>
    				<span class="sp-bottom">travel blog ever?</span>
    			</h2>
    		</div>
    		<div class="sp-wrap sp-right col-md-6">
    			<h2>
    				<span class="sp-top">Wouldn't that be absolutely</span>
    				<span class="sp-mid">great<i>!</i><i>?</i></span>
    				<span class="sp-bottom">Yeah, it would!</span>
    			</h2>
    		</div>
    	</div>
      <div class="row">
        <div class="sp-full col-xs-12">
          <a href="#homepage-primary-heading"><i class="fa fa-arrow-circle-o-down fa-lg" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
</div>

<script>
jQuery('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = jQuery(this.hash);
    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      jQuery('html, body').animate({
        scrollTop: target.offset().top -50
      }, 1000);
      return false;
    }
  }
});
</script>
