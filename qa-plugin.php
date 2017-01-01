<?php
/*
  Plugin Name: Verified accounts Badge
  Plugin URI: https://github.com/Sshuichi/qa-verified-accounts
  Plugin Description: Display verified badges to users with certain level or above.
  Plugin Version: 1.0
  Plugin Date: 2017-01-01
  Plugin Author: Sshuicchi
  Plugin Author URI:
  Plugin License: GPLv2
  Plugin Minimum Question2Answer Version: 1.7
  Plugin Update Check URI:
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../../');
    exit;
}


qa_register_plugin_layer(
    'qa-verified-accounts-layer.php', // PHP file containing layer
    'Tag Description Layer' // human-readable name of layer
);
