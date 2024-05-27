<?php
/*
Plugin Name: Mailster Mailgun Integration
Requires Plugins: mailster
Plugin URI: https://mailster.co/?utm_campaign=wporg&utm_source=wordpress.org&utm_medium=plugin&utm_term=Mailgun
Description: Uses Mailgun to deliver emails for the Mailster Newsletter Plugin for WordPress.
Version: 1.5.1
Author: EverPress
Author URI: https://mailster.co
Text Domain: mailster-mailgun
License: GPLv2 or later
*/


define( 'MAILSTER_MAILGUN_VERSION', '1.5.1' );
define( 'MAILSTER_MAILGUN_REQUIRED_VERSION', '4.0' );
define( 'MAILSTER_MAILGUN_FILE', __FILE__ );

require_once __DIR__ . '/classes/mailgun.class.php';
new MailsterMailgun();
