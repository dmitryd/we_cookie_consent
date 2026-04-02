<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

$pluginSignature = ExtensionUtility::registerPlugin(
    'WeCookieConsent',
    'Pi2',
    'Cookie List',
    'we-cookie-consent-extension-icon',
    'plugins',
    'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_we_cookie_consent_pi2.description'
);

ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;Configuration,pi_flexform,',
    $pluginSignature,
    'after:subheader'
);
ExtensionManagementUtility::addPiFlexFormValue(
    '',
    'FILE:EXT:we_cookie_consent/Configuration/FlexForms/flexform_pi2.xml',
    $pluginSignature
);
