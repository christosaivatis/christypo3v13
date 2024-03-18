<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Temporary variables
 */
$extensionKey = 'my_sitepackage';

/**
 * Default PageTS for MySitepackage
 */
ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/myPageTSconfigFile.tsconfig',
    'My special config'
);
