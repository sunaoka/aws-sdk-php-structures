<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userSettingsArn
 * @property 'Disabled'|'Enabled'|null $copyAllowed
 * @property 'Disabled'|'Enabled'|null $pasteAllowed
 * @property 'Disabled'|'Enabled'|null $downloadAllowed
 * @property 'Disabled'|'Enabled'|null $uploadAllowed
 * @property 'Disabled'|'Enabled'|null $printAllowed
 * @property int<1, 600>|null $disconnectTimeoutInMinutes
 * @property int<0, 60>|null $idleDisconnectTimeoutInMinutes
 * @property string|null $clientToken
 * @property Shapes\CookieSynchronizationConfiguration|null $cookieSynchronizationConfiguration
 * @property 'Disabled'|'Enabled'|null $deepLinkAllowed
 * @property Shapes\ToolbarConfiguration|null $toolbarConfiguration
 * @property Shapes\BrandingConfigurationUpdateInput|null $brandingConfigurationInput
 * @property 'Disabled'|'Enabled'|null $webAuthnAllowed
 */
class UpdateUserSettingsRequest extends Request
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
     *     clientToken?: string|null,
     *     cookieSynchronizationConfiguration?: Shapes\CookieSynchronizationConfiguration|null,
     *     deepLinkAllowed?: 'Disabled'|'Enabled'|null,
     *     toolbarConfiguration?: Shapes\ToolbarConfiguration|null,
     *     brandingConfigurationInput?: Shapes\BrandingConfigurationUpdateInput|null,
     *     webAuthnAllowed?: 'Disabled'|'Enabled'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
