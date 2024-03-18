<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

/***************
 * PageTS
 */
$versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
// Only include page.tsconfig if TYPO3 version is below 12 so that it is not imported twice.
// (Starting with TYPO3 12 the file Configuration/page.tsconfig is automatically loaded during build time)
if ($versionInformation->getMajorVersion() < 12) {
    ExtensionManagementUtility::addPageTSConfig(
        '@import "EXT:my_sitepackage/Configuration/page.tsconfig"'
    );
}

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['my_sitepackage'] = 'EXT:my_sitepackage/Configuration/RTE/Default.yaml';
