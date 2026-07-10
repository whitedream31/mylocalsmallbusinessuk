<?php
// =============================================================
// config/config.php  –  site-wide configuration
// Copy this to config/config.local.php and edit for your environment.
// Never commit config.local.php to version control.
// =============================================================

define('DB_HOST',     'localhost');
define('DB_NAME',     'mlsb');
define('DB_USER',     'mlsb_user');
define('DB_PASS',     'change_me_in_production');
define('DB_CHARSET',  'utf8mb4');

// SITE_URL is auto-detected from the current request so the same codebase
// works on localhost, staging, and production without any change.
// Override in config.local.php only if auto-detection is wrong for your setup.
define('SITE_URL', (
    ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http')
    . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost')
));

define('SITE_NAME',   'My Local Small Business');

// Sub-folder path when not hosted at the domain root.
// e.g. if accessed at http://localhost/mlsb  →  define('BASE_PATH', '/mlsb')
// Leave as '' when hosted at the domain root.
define('BASE_PATH', '/mlsb');

define('UPLOADS_DIR', __DIR__ . '/../uploads/');

// UPLOADS_URL uses a relative path so it works on every environment.
// It does NOT include the domain name.
define('UPLOADS_URL', BASE_PATH . '/uploads/');

define('MAIL_FROM',   'noreply@mlsb.org');
define('MAIL_NAME',   'My Local Small Business');

// Mail driver: 'php' uses PHP's built-in mail() function.
// Set to 'smtp' and fill in the SMTP_* constants to use a real mail server.
define('MAIL_DRIVER',  'php');           // 'php' or 'smtp'
define('MAIL_ADMIN',   'admin@mlsb.org'); // where new-signup notifications are sent

// SMTP settings — only used when MAIL_DRIVER = 'smtp'
define('SMTP_HOST',    'smtp.example.com');
define('SMTP_PORT',    587);             // 587 = STARTTLS, 465 = SSL, 25 = plain
define('SMTP_ENCRYPT', 'tls');           // 'tls' (STARTTLS), 'ssl', or '' (none)
define('SMTP_USER',    'user@example.com');
define('SMTP_PASS',    'your-smtp-password');

// Session cookie lifetime in seconds (7 days)
define('SESSION_LIFETIME', 60 * 60 * 24 * 7);

// Plan tier IDs
define('PLAN_FREE',  1);
define('PLAN_TRIAL', 2);
define('PLAN_PAID',  3);

// Free tier limits
define('FREE_MAX_GALLERIES',   1);
define('FREE_MAX_IMAGES',      10);
define('FREE_MAX_PRICE_LISTS', 1);
define('FREE_MAX_MENUS',       1);
define('FREE_MAX_ARTICLES',    3);
define('FREE_MAX_CALLOUTS',    2);
define('FREE_MAX_SOCIAL',      3);

// Reserved slugs – cannot be used as business slugs
define('RESERVED_SLUGS', [
  'register','login','logout','admin','superadmin','search','about',
  'contact','help','terms','privacy','cookies','blog','news','api',
  'assets','uploads','images','static','www','mail','smtp','ftp',
  'dev','test','staging','demo','support','billing','account',
]);
