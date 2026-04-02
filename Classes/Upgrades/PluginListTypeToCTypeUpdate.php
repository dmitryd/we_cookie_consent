<?php

declare(strict_types=1);

namespace Websedit\WeCookieConsent\Upgrades;

use TYPO3\CMS\Core\Attribute\UpgradeWizard;
use TYPO3\CMS\Core\Upgrades\AbstractListTypeToCTypeUpdate;

/**
 * This class contains an upgrade wizard to replace plugins this content elements.
 */
#[UpgradeWizard('weCookieConsentListTypeToCTypeMigration')]
final class PluginListTypeToCTypeUpdate extends AbstractListTypeToCTypeUpdate
{
    /** inheritdoc */
    protected function getListTypeToCTypeMapping(): array
    {
        return [
            'wecookieconsent_pi1' => 'wecookieconsent_pi1',
            'wecookieconsent_pi2' => 'wecookieconsent_pi2',
        ];
    }

    /** inheritdoc */
    public function getTitle(): string
    {
        return 'Migrate we_cookie_consent plugins to content elements.';
    }

    /** inheritdoc */
    public function getDescription(): string
    {
        return 'Migrates existing we_cookie_consent records from list_type plugins to CType content elements and updates backend permissions.';
    }
}
