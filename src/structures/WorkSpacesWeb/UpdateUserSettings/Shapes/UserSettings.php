<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userSettingsArn
 * @property list<string>|null $associatedPortalArns
 * @property 'Disabled'|'Enabled'|null $copyAllowed
 * @property 'Disabled'|'Enabled'|null $pasteAllowed
 * @property 'Disabled'|'Enabled'|null $downloadAllowed
 * @property 'Disabled'|'Enabled'|null $uploadAllowed
 * @property 'Disabled'|'Enabled'|null $printAllowed
 * @property int<1, 600>|null $disconnectTimeoutInMinutes
 * @property int<0, 60>|null $idleDisconnectTimeoutInMinutes
 * @property CookieSynchronizationConfiguration|null $cookieSynchronizationConfiguration
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property 'Disabled'|'Enabled'|null $deepLinkAllowed
 * @property ToolbarConfiguration|null $toolbarConfiguration
 * @property BrandingConfiguration|null $brandingConfiguration
 */
class UserSettings extends Shape
{
    /**
     * @param array{
     *     userSettingsArn: string,
     *     associatedPortalArns?: list<string>|null,
     *     copyAllowed?: 'Disabled'|'Enabled'|null,
     *     pasteAllowed?: 'Disabled'|'Enabled'|null,
     *     downloadAllowed?: 'Disabled'|'Enabled'|null,
     *     uploadAllowed?: 'Disabled'|'Enabled'|null,
     *     printAllowed?: 'Disabled'|'Enabled'|null,
     *     disconnectTimeoutInMinutes?: int<1, 600>|null,
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>|null,
     *     cookieSynchronizationConfiguration?: CookieSynchronizationConfiguration|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     deepLinkAllowed?: 'Disabled'|'Enabled'|null,
     *     toolbarConfiguration?: ToolbarConfiguration|null,
     *     brandingConfiguration?: BrandingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
