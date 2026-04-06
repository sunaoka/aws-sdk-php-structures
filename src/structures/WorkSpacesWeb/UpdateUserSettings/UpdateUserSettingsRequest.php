<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\CookieSynchronizationConfiguration|null $cookieSynchronizationConfiguration
 * @property 'Disabled'|'Enabled'|null $copyAllowed
 * @property 'Disabled'|'Enabled'|null $deepLinkAllowed
 * @property int<1, 600>|null $disconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled'|null $downloadAllowed
 * @property int<0, 60>|null $idleDisconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled'|null $pasteAllowed
 * @property 'Disabled'|'Enabled'|null $printAllowed
 * @property 'Disabled'|'Enabled'|null $uploadAllowed
 * @property string $userSettingsArn
 */
class UpdateUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     cookieSynchronizationConfiguration?: Shapes\CookieSynchronizationConfiguration|null,
     *     copyAllowed?: 'Disabled'|'Enabled'|null,
     *     deepLinkAllowed?: 'Disabled'|'Enabled'|null,
     *     disconnectTimeoutInMinutes?: int<1, 600>|null,
     *     downloadAllowed?: 'Disabled'|'Enabled'|null,
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>|null,
     *     pasteAllowed?: 'Disabled'|'Enabled'|null,
     *     printAllowed?: 'Disabled'|'Enabled'|null,
     *     uploadAllowed?: 'Disabled'|'Enabled'|null,
     *     userSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
