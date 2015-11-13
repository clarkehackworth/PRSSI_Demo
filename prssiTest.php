<?php
/******************************
Author: Jeff Beard-Shouse http://clarkehackworth.com
Company: Security PS - http://securityps.com

This is a proof of concept to demonstrate PRSSI (Path Relative Style Sheet Import) 
vulnerabilities. This is meant for demonstration purposes only. Jeff Beard-Shouse 
and Security PS are not responsible for any damages that may occur with the use of 
this code. 

Licence: The GNU General Public License (GPL-2.0)
http://opensource.org/licenses/GPL-2.0
*******************************/

if(isset($_GET["param"]))
  file_put_contents('./prssiInput.txt',"\n".$_GET['param']."\n");

// Correct doc type
//echo('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">');

// Invalid doc type
//echo('<!DOCTYPE html PUBLIC>');

echo('<html><body>');

echo '<link href="style.css" rel="stylesheet" type="text/css" />';
echo '<div class="content">';

$contents = file_get_contents("./prssiInput.txt");

echo htmlspecialchars($contents);

echo('</div></body></html>');
?>


