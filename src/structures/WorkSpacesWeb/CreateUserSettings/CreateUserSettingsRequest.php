<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Disabled'|'Enabled' $copyAllowed
 * @property 'Disabled'|'Enabled' $pasteAllowed
 * @property 'Disabled'|'Enabled' $downloadAllowed
 * @property 'Disabled'|'Enabled' $uploadAllowed
 * @property 'Disabled'|'Enabled' $printAllowed
 * @property list<Shapes\Tag>|null $tags
 * @property int<1, 600>|null $disconnectTimeoutInMinutes
 * @property int<0, 60>|null $idleDisconnectTimeoutInMinutes
 * @property string|null $clientToken
 * @property Shapes\CookieSynchronizationConfiguration|null $cookieSynchronizationConfiguration
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property 'Disabled'|'Enabled'|null $deepLinkAllowed
 * @property Shapes\ToolbarConfiguration|null $toolbarConfiguration
 */
class CreateUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     copyAllowed: 'Disabled'|'Enabled',
     *     pasteAllowed: 'Disabled'|'Enabled',
     *     downloadAllowed: 'Disabled'|'Enabled',
     *     uploadAllowed: 'Disabled'|'Enabled',
     *     printAllowed: 'Disabled'|'Enabled',
     *     tags?: list<Shapes\Tag>|null,
     *     disconnectTimeoutInMinutes?: int<1, 600>|null,
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>|null,
     *     clientToken?: string|null,
     *     cookieSynchronizationConfiguration?: Shapes\CookieSynchronizationConfiguration|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     deepLinkAllowed?: 'Disabled'|'Enabled'|null,
     *     toolbarConfiguration?: Shapes\ToolbarConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
