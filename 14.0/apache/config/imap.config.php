<?php
$CONFIG = array (

  'user_backends' => array(
      array(
          'class' => 'OC_User_IMAP',
          'arguments' => array(
              '{'.getenv("IMAP_SERVER").':993/imap/ssl}', getenv("IMAP_DOMAIN")
          ),
      ),
  ),
);
