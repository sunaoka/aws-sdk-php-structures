<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $additionalEncryptionContext
 * @property string|null $clientToken
 * @property Shapes\CookieSynchronizationConfiguration|null $cookieSynchronizationConfiguration
 * @property 'Disabled'|'Enabled' $copyAllowed
 * @property string|null $customerManagedKey
 * @property 'Disabled'|'Enabled'|null $deepLinkAllowed
 * @property int<1, 600>|null $disconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $downloadAllowed
 * @property int<0, 60>|null $idleDisconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $pasteAllowed
 * @property 'Disabled'|'Enabled' $printAllowed
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\ToolbarConfiguration|null $toolbarConfiguration
 * @property 'Disabled'|'Enabled' $uploadAllowed
 */
class CreateUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     additionalEncryptionContext?: array<string, string>|null,
     *     clientToken?: string|null,
     *     cookieSynchronizationConfiguration?: Shapes\CookieSynchronizationConfiguration|null,
     *     copyAllowed: 'Disabled'|'Enabled',
     *     customerManagedKey?: string|null,
     *     deepLinkAllowed?: 'Disabled'|'Enabled'|null,
     *     disconnectTimeoutInMinutes?: int<1, 600>|null,
     *     downloadAllowed: 'Disabled'|'Enabled',
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>|null,
     *     pasteAllowed: 'Disabled'|'Enabled',
     *     printAllowed: 'Disabled'|'Enabled',
     *     tags?: list<Shapes\Tag>|null,
     *     toolbarConfiguration?: Shapes\ToolbarConfiguration|null,
     *     uploadAllowed: 'Disabled'|'Enabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
