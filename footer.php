  
  <footer class="footer">
    <ul class="footer_content">
      <li style="color:#000">Get in Touch</li>
      <li>hello@yoursite</li>
    </ul>    
    <ul class="footer_content">
      <li>Twitter</li>
      <li>Instagram</li>
      <li>Pinterest</li>
      <li>Dribbble</li>
      <li>Linkedin</li>
    </ul>    
    <ul class="footer_content">
    <?php
        $args = array(
          'theme_location' => 'primary',
        );
      ?>
      <?php wp_nav_menu($args);?>
    </ul>    
  </footer>

  </div>

  <?php wp_footer();?>
  
  </div>
</body>
</html>
