<?php
  // Carregar o ambiente do WordPress
  // define('WP_DEBUG', true); /* uncomment for debug mode */
  require('./wp-load.php');
  // require_once ('./wp-admin/admin.php'); /* remova o comentário para o is_admin() */
?>
<pre>
  <?php
    /* teste algo aqui */
    var_dump(is_admin());
  ?>
</pre>