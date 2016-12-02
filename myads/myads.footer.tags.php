<?php
/* ====================
[BEGIN_COT_EXT]
Code=myads
Hooks=footer.tags
Tags=footer.tpl:{FOOTER_RC}
Order=10
[END_COT_EXT]
==================== */

/**
 * myads footer tags of plugin
 *
 * @author  WebRomen
 * @copyright Copyright (C) 2014 - today: WebRomen | https://github.com/WebRomen/myads
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

$out['footer_rc'] .= $cfg['plugin']['myads']['myads_footerlist'];
