<?php

'user_backends' => array(
    array(
        'class' => 'OC_User_IMAP',
        'arguments' => array(
            '{imap.example.com:993/imap/ssl}', 'example.com'
        ),
    ),
)
