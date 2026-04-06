<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutNotificationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustAnchorId
 * @property list<Shapes\NotificationSetting> $notificationSettings
 */
class PutNotificationSettingsRequest extends Request
{
    /**
     * @param array{
     *     trustAnchorId: string,
     *     notificationSettings: list<Shapes\NotificationSetting>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
