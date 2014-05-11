    </div>
    <div id="footer">
      <div class="container">
        <p class="pull-left text-muted">&copy; <?php echo date("Y") ?>, <?php bloginfo('name'); ?></p>
            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav nav-pills pull-right', 'theme_location' => 'footer-menu' ) ); ?>
      </div>
    </div>
 
<script src="<?php bloginfo( 'template_url') ?>js/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url') ?>js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_url') ?>js/main.js"></script>
</body>
</html>