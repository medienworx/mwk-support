<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 - 2015 Agentur medienworx
 *
 * @package     mwk-partnermanager
 * @author      Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link        http://www.medienworx.eu
 * @license     http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
'medienworx',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Src
    'medienworx\MwkSupportModel' => 'system/modules/mwk-support/src/medienworx/models/MwkSupportModel.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'be_mwk_support' => 'system/modules/mwk-support/templates',
));