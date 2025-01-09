<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\CookieSynchronizationConfiguration $cookieSynchronizationConfiguration
 * @property 'Disabled'|'Enabled' $copyAllowed
 * @property 'Disabled'|'Enabled' $deepLinkAllowed
 * @property int<1, 600> $disconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $downloadAllowed
 * @property int<0, 60> $idleDisconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $pasteAllowed
 * @property 'Disabled'|'Enabled' $printAllowed
 * @property 'Disabled'|'Enabled' $uploadAllowed
 * @property string $userSettingsArn
 */
class UpdateUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     cookieSynchronizationConfiguration?: Shapes\CookieSynchronizationConfiguration,
     *     copyAllowed?: 'Disabled'|'Enabled',
     *     deepLinkAllowed?: 'Disabled'|'Enabled',
     *     disconnectTimeoutInMinutes?: int<1, 600>,
     *     downloadAllowed?: 'Disabled'|'Enabled',
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>,
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
