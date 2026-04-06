<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Disabled'|'Enabled'|null $copyAllowed
 * @property int<1, 600>|null $disconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled'|null $downloadAllowed
 * @property int<0, 60>|null $idleDisconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled'|null $pasteAllowed
 * @property 'Disabled'|'Enabled'|null $printAllowed
 * @property 'Disabled'|'Enabled'|null $uploadAllowed
 * @property string|null $userSettingsArn
 */
class UserSettingsSummary extends Shape
{
    /**
     * @param array{
     *     copyAllowed?: 'Disabled'|'Enabled'|null,
     *     disconnectTimeoutInMinutes?: int<1, 600>|null,
     *     downloadAllowed?: 'Disabled'|'Enabled'|null,
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>|null,
     *     pasteAllowed?: 'Disabled'|'Enabled'|null,
     *     printAllowed?: 'Disabled'|'Enabled'|null,
     *     uploadAllowed?: 'Disabled'|'Enabled'|null,
     *     userSettingsArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
