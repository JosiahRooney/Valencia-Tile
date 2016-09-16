<div class="clear"></div>
</div><!-- #container -->
<div class="soc-med">
	<div class="social-icon">
		<a href="https://www.facebook.com/pages/Rodrigo-Valencia-Tile/577271895707663" target="_blank">
			<i class="fa fa-facebook"></i>
		</a>
	</div>
	<div class="social-icon">
		<a href="https://plus.google.com/102501225561510485774/about" target="_blank">
			<i class="fa fa-google"></i>
		</a>
	</div>
	<div class="social-icon">
		<a href="https://twitter.com/RValenciaTile" target="_blank">
			<i class="fa fa-twitter"></i>
		</a>
	</div>
	<div class="social-icon">
		<a href="http://www.yelp.com/biz/rodrigo-valencia-tile-santa-rosa" target="_blank">
			<i class="fa fa-yelp"></i>
		</a>
	</div>
</div>
<footer id="footer" role="contentinfo" class="cf">
	<div id="copyright">
		<?php echo sprintf( __( '%1$s %2$s %3$s', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?> | License # 994623 | <a href="http://www.rooneydev.com" target="_blank">Website Design by Josiah Rooney</a>
	</div>
</footer>
</div> <!-- .container-wrap -->
</div> <!-- #wrapper -->
<?php wp_footer(); ?>

<script>

	jQuery(document).ready(function ($) {
    	
		$(document).on('scroll', function(){
			var offset = $(this).scrollTop();
			var output = '16px ';
			output += offset / 3.25;
			output += 'px';
			$('#header').css('background-position', output);
		});

		$(document).on('scroll', function(){
			var offset = $(this).scrollTop();
			var output = '0px ';
			output += offset / 1.25;
			output += 'px';
			$('html').css('background-position', output);
		});

		// Set min height of document
		var ht = $(document).height();
		$( 'html' ).css('min-height', ht);

		// Set min height of sidebar
		var contentHeight = $( '#container' ).height();
		$( '#sidebar' ).css('min-height', contentHeight);

		// Make Search Results Clickable
		$( '.search-results #content > article' ).on('click', function(){
			var destination = $(this).find('[rel="bookmark"]').attr('href');
			window.location.href = destination;
		});

		// Add arrows to child pages li
	    $('.ccchildpages li').prepend('<i class="fa fa-chevron-right"></i>');

	    // Menu effects
	    $('.menu-item').hover(function(){
	    	$(this).stop(true,true).find('.sub-menu').fadeIn();
	    }, function(){
	    	$(this).stop(true,true).find('.sub-menu').fadeOut('slow');
	    });

	    // Track Conversion on contact form
	    $('#cntctfrm_contact_form').find('input[type=submit]').on('click',function(){
	    	__gaTracker('send', 'event', 'inpage-link', 'click', 'contact-us');
	    	console.log('found');
	    });

	});

</script>
</body>
</html>