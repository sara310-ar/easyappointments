<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'Bioalliance';
$config['protocol'] = 'smtp'; // or 'smtp'
$config['mailtype'] = 'html'; // or 'text'
$config['smtp_debug'] = '0'; // or '1'
$config['smtp_auth'] = TRUE; //or FALSE for anonymous relay.
$config['smtp_host'] = 'smtp.hostinger.com';
$config['smtp_user'] = 'megherbi.abdelhak@developily.com';
$config['smtp_pass'] = '@Imzad2020';
$config['smtp_crypto'] = 'ssl'; // or 'tls'
$config['smtp_port'] = 465;