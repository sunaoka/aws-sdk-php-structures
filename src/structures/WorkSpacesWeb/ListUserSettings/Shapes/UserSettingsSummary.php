<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CookieSynchronizationConfiguration $cookieSynchronizationConfiguration
 * @property 'Disabled'|'Enabled' $copyAllowed
 * @property 'Disabled'|'Enabled' $deepLinkAllowed
 * @property int $disconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $downloadAllowed
 * @property int $idleDisconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $pasteAllowed
 * @property 'Disabled'|'Enabled' $printAllowed
 * @property 'Disabled'|'Enabled' $uploadAllowed
 * @property string $userSettingsArn
 */
class UserSettingsSummary extends Shape
{
    /**
     * @param array{
     *     cookieSynchronizationConfiguration?: CookieSynchronizationConfiguration,
     *     copyAllowed?: 'Disabled'|'Enabled',
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
