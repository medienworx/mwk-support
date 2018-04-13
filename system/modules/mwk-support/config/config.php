<?php

 /**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package     mwk-phpinfo
 * @copyright    (c) 2015-2018 Agentur medienworx
 * @license     http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

/**
 * Back end modules
 */

if (!is_array($GLOBALS['BE_MOD']['mwk-supportcenter']))
{
	array_insert($GLOBALS['BE_MOD'], 1, array('mwk-supportcenter' => array()));
}

array_insert($GLOBALS['BE_MOD'], 0, array

('mwk-supportcenter' => array
	(
		'mwk-support' => array
		(
            'callback'          => 'MwkSupportModel',
            'icon'              => 'system/modules/mwk-support/assets/images/icon-support.png',
			'stylesheet'		=> 'system/modules/mwk-support/assets/css/support.css'
		),
	)

));