<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ResetNotificationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\NotificationSettingKey> $notificationSettingKeys
 * @property string $trustAnchorId
 */
class ResetNotificationSettingsRequest extends Request
{
    /**
     * @param array{
     *     notificationSettingKeys: list<Shapes\NotificationSettingKey>,
     *     trustAnchorId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
