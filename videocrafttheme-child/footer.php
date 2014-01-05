<div class="footer_wrapper">
  <div class="container_24">
    <div class="grid_24">
      <div class="footer_topwrapper">
        <?php
        /* A sidebar in the footer? Yep. You can can customize
         * your footer with four columns of widgets.
          */
         get_sidebar('footer');
         ?>
      </div>
    </div>
	    <div class="clear"></div>
    <div class="container_24">
    <div class="grid_24">
      <div class="footer_bottom">
        <div class="grid_10 alpha">
         <div class="footer-social">
          <ul class="fsocialicon">
            <li><a href="https://twitter.com/contour_cam" title="Contour on Twitter" class="icon-social twitter ir">Twitter</a></li>
            <li><a href="http://www.facebook.com/contour" title="Contour on Facebook" class="icon-social facebook ir">Facebook</a></li>
            <li><a href="http://www.youtube.com/contour" title="Contour on YouTube" class="icon-social youtube ir">YouTube</a></li>
            <li><a href="http://instagram.com/contour_cam" title="Contour on Instagram" class="icon-social instagram ir">Instagram</a></li>
          </ul>
          </div>
        </div>
        <div class="grid_14 omega">
          <div class="copyright">
          <div class="copyrightinfo">
		  <div class="copyrightinfo">
       Copyright &copy; <?php echo date("Y"); ?> Contour
		  </div>
        </div>
        </div>
      </div>
    </div>
  </div>
      <div class="clear"></div>
  </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
