<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $additionalEncryptionContext
 * @property string $clientToken
 * @property Shapes\CookieSynchronizationConfiguration $cookieSynchronizationConfiguration
 * @property 'Disabled'|'Enabled' $copyAllowed
 * @property string $customerManagedKey
 * @property 'Disabled'|'Enabled' $deepLinkAllowed
 * @property int<1, 600> $disconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $downloadAllowed
 * @property int<0, 60> $idleDisconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $pasteAllowed
 * @property 'Disabled'|'Enabled' $printAllowed
 * @property list<Shapes\Tag> $tags
 * @property 'Disabled'|'Enabled' $uploadAllowed
 */
class CreateUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>,
     *     clientToken?: string,
     *     cookieSynchronizationConfiguration?: Shapes\CookieSynchronizationConfiguration,
     *     copyAllowed: 'Disabled'|'Enabled',
     *     customerManagedKey?: string,
     *     deepLinkAllowed?: 'Disabled'|'Enabled',
     *     disconnectTimeoutInMinutes?: int<1, 600>,
     *     downloadAllowed: 'Disabled'|'Enabled',
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>,
     *     pasteAllowed: 'Disabled'|'Enabled',
     *     printAllowed: 'Disabled'|'Enabled',
     *     tags?: list<Shapes\Tag>,
     *     uploadAllowed: 'Disabled'|'Enabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
