<?php
/**
 * Notes is a simple transparent PHP tool to help implement basic Markdown
 * based blogging into any website without causing extra fuss or work.
 *
 * @author     Omar Quazi <omar@quazi.co>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt   GNU GPL 3.0
 * @link       https://github.com/blacksector/notes
 */

// Configuration Variables:

include('config.php');

// Dont touch this stuff unless you understand it.
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)));

define('CONTENT_DIR', ROOT . DS . 'posts' . DS);
define('TEMPLATES_DIR', ROOT . DS . 'template' . DS);

// Get request url and script url
$url = "";
$request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
$script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';

//echo $request_url;
define('JS_PATH', str_replace('index.php', '', $script_url));

// Get our url path and trim the / off the left and the right
if ($request_url != $script_url) {
	$url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');
}

// Get the file path
if ($url) {
  $file = CONTENT_DIR . $url;
} else {
  $file = CONTENT_DIR . 'index';
}

// Check if file or directory:
if (is_dir($file)) {
	// If directory, load the index file from there.
  $file = CONTENT_DIR . $url . DS . 'index' . FILE_FORMAT;
} else {
	// Not a directory? Add the file format at the end.
  $file .= FILE_FORMAT;
}

// Check if file exists
if (file_exists($file)) {
	// If file exists, open file and save it's contents
	$content = file_get_contents($file);
} else {
	// File doesn't exist, open up the 404 error and show that.
	$content = file_get_contents(CONTENT_DIR .'404' . FILE_FORMAT);
}


// Grab the # tag we will use this for generating titles.
preg_match('/(?m)^#(?!#)(.*)/', $content, $matches, PREG_OFFSET_CAPTURE);
$pageTitle = (isset($matches[1][0])) ? $matches[1][0] : '';


// Finally import a template and show it on screen.
include(TEMPLATES_DIR . TEMPLATE . DS . 'header.php');
include(TEMPLATES_DIR . TEMPLATE . DS . 'body.php');
include(TEMPLATES_DIR . TEMPLATE . DS . 'footer.php');
