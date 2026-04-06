<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userSettingsArn
 * @property 'Disabled'|'Enabled'|null $copyAllowed
 * @property 'Disabled'|'Enabled'|null $pasteAllowed
 * @property 'Disabled'|'Enabled'|null $downloadAllowed
 * @property 'Disabled'|'Enabled'|null $uploadAllowed
 * @property 'Disabled'|'Enabled'|null $printAllowed
 * @property int<1, 600>|null $disconnectTimeoutInMinutes
 * @property int<0, 60>|null $idleDisconnectTimeoutInMinutes
 * @property CookieSynchronizationConfiguration|null $cookieSynchronizationConfiguration
 * @property 'Disabled'|'Enabled'|null $deepLinkAllowed
 * @property ToolbarConfiguration|null $toolbarConfiguration
 * @property BrandingConfiguration|null $brandingConfiguration
 * @property 'Disabled'|'Enabled'|null $webAuthnAllowed
 */
class UserSettingsSummary extends Shape
{
    /**
     * @param array{
     *     userSettingsArn: string,
     *     copyAllowed?: 'Disabled'|'Enabled'|null,
     *     pasteAllowed?: 'Disabled'|'Enabled'|null,
     *     downloadAllowed?: 'Disabled'|'Enabled'|null,
     *     uploadAllowed?: 'Disabled'|'Enabled'|null,
     *     printAllowed?: 'Disabled'|'Enabled'|null,
     *     disconnectTimeoutInMinutes?: int<1, 600>|null,
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>|null,
     *     cookieSynchronizationConfiguration?: CookieSynchronizationConfiguration|null,
     *     deepLinkAllowed?: 'Disabled'|'Enabled'|null,
     *     toolbarConfiguration?: ToolbarConfiguration|null,
     *     brandingConfiguration?: BrandingConfiguration|null,
     *     webAuthnAllowed?: 'Disabled'|'Enabled'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
