<?php

/**
 * Database Configuration.
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

// If LOCALHOST
if($_SERVER["SERVER_ADDR"] == "::1"){
  return array(
    'tablePrefix' => 'craft',
    'server' => 'localhost',
    'database' => 'storm',
    'user' => 'root',
    'password' => 'root',
  );
// If EXTERNAL
}else{
  // External DB info
}
