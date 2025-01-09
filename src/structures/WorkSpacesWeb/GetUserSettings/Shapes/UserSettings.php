<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property list<string> $associatedPortalArns
 * @property CookieSynchronizationConfiguration $cookieSynchronizationConfiguration
 * @property 'Disabled'|'Enabled' $copyAllowed
 * @property string $customerManagedKey
 * @property 'Disabled'|'Enabled' $deepLinkAllowed
 * @property int $disconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $downloadAllowed
 * @property int $idleDisconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $pasteAllowed
 * @property 'Disabled'|'Enabled' $printAllowed
 * @property 'Disabled'|'Enabled' $uploadAllowed
 * @property string $userSettingsArn
 */
class UserSettings extends Shape
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     associatedPortalArns?: list<string>,
     *     cookieSynchronizationConfiguration?: CookieSynchronizationConfiguration,
     *     copyAllowed?: 'Disabled'|'Enabled',
     *     customerManagedKey?: string,
     *     deepLinkAllowed?: 'Disabled'|'Enabled',
     *     disconnectTimeoutInMinutes?: int,
     *     downloadAllowed?: 'Disabled'|'Enabled',
     *     idleDisconnectTimeoutInMinutes?: int,
     *     pasteAllowed?: 'Disabled'|'Enabled',
     *     printAllowed?: 'Disabled'|'Enabled',
     *     uploadAllowed?: 'Disabled'|'Enabled',
     *     userSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
