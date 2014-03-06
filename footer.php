<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package OneBradford_v1
 */
?>

	</div><!-- #content -->

<a name="Contact"></a>
  <footer class="span12">
    <section id="footer-logo">
    <a href="#ob-header"><img style="float:left; padding-bottom:20px; width:70%" src="http://cla6ixdesign.com/staging/wp-content/uploads/one-bradford/OB-Logo-Footer.png"></a>
    <br>
    <div id="footer-nav">
    <a style="color:white;" href="#About">ABOUT</a><br>
    <a style="color:white;" href="#Services">SERVICES</a><br>
    <a style="color:white;" href="#Contact">CONTACT</a><br>
    <a style="color:white;" href="#Social">SOCIAL</a><br>
    </div>
    <div id="footer-info">
    <strong>Kirsten DiChiappari</strong><br>
	Managing Director<br>
	<a style="color:white;" href="mailto:kirsten@onebradford.com">kirsten@onebradford.com</a><br>
	401.424.9142<br>
    </div>
    </section>
    <section id="footer-form">
    <h3 style="color:white">CONTACT US</h3>
    <?php gravity_form(1, false, false, false, '', false); ?>
    </section>
    
  </footer>
  </div> <!--! end of #container -->

<?php wp_footer(); ?>

</body>
</html>

    