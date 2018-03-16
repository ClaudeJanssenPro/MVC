<?php
require 'controllers/globals.php';

include CONTROLLERS . 'debug.php';

if (isset($URL) && $URL != 'main')
{
  include VIEWS . 'header.html';
  // include VIEWS . 'aside.html';
  // include VIEWS . 'nav.html';
  include CONTROLLERS . 'router.php';
  include VIEWS . 'footer.html';
}

else
{
  include VIEWS . 'header.html';
  // include VIEWS . 'nav.html';
  include CONTROLLERS . 'router.php';
  include VIEWS . 'footer.html';
}
 ?>
