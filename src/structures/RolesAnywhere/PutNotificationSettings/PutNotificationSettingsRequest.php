<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutNotificationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\NotificationSetting> $notificationSettings
 * @property string $trustAnchorId
 */
class PutNotificationSettingsRequest extends Request
{
    /**
     * @param array{
     *     notificationSettings: list<Shapes\NotificationSetting>,
     *     trustAnchorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
