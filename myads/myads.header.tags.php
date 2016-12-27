<?php
/* ====================
[BEGIN_COT_EXT]
Code=myads
Hooks=header.tags
Tags=header.tpl:{HEADER_MYADS}
Order=10
[END_COT_EXT]
==================== */

/**
 * myads tags of plugin
 *
 * @author  Roffun
 * @copyright Copyright (c) 2014 - today: Roffun | https://github.com/Roffun
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

$t->assign('HEADER_MYADS', $cfg['plugin']['myads']['myads_headerlist']);
