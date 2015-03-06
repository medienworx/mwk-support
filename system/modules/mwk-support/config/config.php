<?php

 /**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package     mwk-phpinfo
 * Copyright    (c) 2015 Agentur medienworx
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @license     http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

/**
 * Back end modules
 */

array_insert($GLOBALS['BE_MOD'], 0, array

('mwk-manager' => array
	(

		'mwk-support' => array
		(
			#'tables'            => array ('tl_mwk_support'),
            'callback'          => 'MwkSupportModel',
            'icon'              => 'system/modules/mwk-support/assets/images/icon-support.png',
			'stylesheet'		=> 'system/modules/mwk-support/assets/css/support.css'
		),



	)

));