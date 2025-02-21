<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property list<string>|null $associatedPortalArns
 * @property CookieSynchronizationConfiguration|null $cookieSynchronizationConfiguration
 * @property 'Disabled'|'Enabled'|null $copyAllowed
 * @property string|null $customerManagedKey
 * @property 'Disabled'|'Enabled'|null $deepLinkAllowed
 * @property int<1, 600>|null $disconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled'|null $downloadAllowed
 * @property int<0, 60>|null $idleDisconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled'|null $pasteAllowed
 * @property 'Disabled'|'Enabled'|null $printAllowed
 * @property ToolbarConfiguration|null $toolbarConfiguration
 * @property 'Disabled'|'Enabled'|null $uploadAllowed
 * @property string $userSettingsArn
 */
class UserSettings extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     associatedPortalArns?: list<string>|null,
     *     cookieSynchronizationConfiguration?: CookieSynchronizationConfiguration|null,
     *     copyAllowed?: 'Disabled'|'Enabled'|null,
     *     customerManagedKey?: string|null,
     *     deepLinkAllowed?: 'Disabled'|'Enabled'|null,
     *     disconnectTimeoutInMinutes?: int<1, 600>|null,
     *     downloadAllowed?: 'Disabled'|'Enabled'|null,
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>|null,
     *     pasteAllowed?: 'Disabled'|'Enabled'|null,
     *     printAllowed?: 'Disabled'|'Enabled'|null,
     *     toolbarConfiguration?: ToolbarConfiguration|null,
     *     uploadAllowed?: 'Disabled'|'Enabled'|null,
     *     userSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
