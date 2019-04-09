<footer id="colophon" class="site-footer site-footer-social" role="contentinfo">
	
	<div class="site-footer-icons">
        <div class="site-container">
            
            <p>© COPYRIGHT 2019 - Berit Abrahamssons Foto</p>
        	<div class="site-footer-social-ad"><?php echo wp_kses_post( get_theme_mod( 'vogue-website-site-add', __( 'Cape Town, South Africa', 'vogue' ) ) ) ?>
        	
		<!-- <?php printf( __( '</div><div class="site-footer-social-copy">Theme: %1$s by %2$s', 'vogue' ), '<a href="https://demo.kairaweb.com/#vogue">Vogue</a>', 'Kaira</div><div class="clearboth"></div></div></div>' ); ?> -->
        
</footer>

<?php if ( get_theme_mod( 'vogue-footer-bottombar', customizer_library_get_default( 'vogue-footer-bottombar' ) ) == 0 ) : ?>
	
	<div class="site-footer-bottom-bar">
	
		<div class="site-container">
			
			<?php do_action ( 'vogue_footer_bottombar_left' ); ?>

			<?php if ( get_theme_mod( 'vogue-footer-privacy-link' ) ) : ?>
        		<?php if ( function_exists( 'the_privacy_policy_link' ) ) { the_privacy_policy_link(); } ?>
        	<?php endif; ?>
			
	        <?php wp_nav_menu( array( 'theme_location' => 'footer-bar','container' => false ) ); ?>
	        
	        <?php do_action ( 'vogue_footer_bottombar_right' ); ?>
                
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
<?php endif; ?>