<?php 
/* Add CSS For better visiblites */
defined('ABSPATH') or die('Unauthorized Access');
echo '<style>#adminmenu a,body a:link{background: transparent!important;}html body {background-color: #f0f0f1;}</style><div class="wrap"><center><h1>PHP-Info</h1><h4>Disable it once you are done debugging.</h4></center>';
	phpinfo();
echo '</div>';
exit;