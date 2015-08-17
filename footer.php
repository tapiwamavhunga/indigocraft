<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>



<div class="content-section dark-section padding-top-bottom-small">
		
			<div class="container">
				<div class="eight columns">
					<div class="logo-footer">
						<img alt="" src="<?php echo get_template_directory_uri();?>/images/logo-white.png">
					</div>
				</div>
				<div class="eight columns">
					<div class="contact-footer dark-footer-version">
						<a href="mailto:info@myemail.co"><p>info@myemail.com</p></a>
						<p>0244-12345678</p>
						<p>MyStreetName 24<br>
						W1234X<br>
						London, UK</p>
					</div>
				</div>
				<div class="sixteen columns remove-bottom">
					<div class="line-footer dark-footer-version"></div>
				</div>
				<div class="eight columns">
					<div class="bottom-left-footer dark-footer-version">
						<p>&copy; Pontus. All rights reserved. Made by IG Design 2015.</p>
					</div>
				</div>
				<div class="eight columns">
					<div class="bottom-right-footer dark-footer-version">
						<ul>
							<li>
								<a data-tipper-options="{&quot;direction&quot;:&quot;top&quot;,&quot;follow&quot;:&quot;true&quot;,&quot;margin&quot;:30}" data-title="skype" class="tipped tipper-attached" href="#"></a>
							</li>
							<li>
								<a data-tipper-options="{&quot;direction&quot;:&quot;top&quot;,&quot;follow&quot;:&quot;true&quot;,&quot;margin&quot;:30}" data-title="dropbox" class="tipped tipper-attached" href="#"></a>
							</li>
							<li>
								<a data-tipper-options="{&quot;direction&quot;:&quot;top&quot;,&quot;follow&quot;:&quot;true&quot;,&quot;margin&quot;:30}" data-title="github" class="tipped tipper-attached" href="#"></a>
							</li>
							<li>
								<a data-tipper-options="{&quot;direction&quot;:&quot;top&quot;,&quot;follow&quot;:&quot;true&quot;,&quot;margin&quot;:30}" data-title="twitter" class="tipped tipper-attached" href="#"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
						
		</div>

<?php get_template_part( 'footer_load_js' ); ?>
<?php wp_footer(); ?>

</body>
</html>
