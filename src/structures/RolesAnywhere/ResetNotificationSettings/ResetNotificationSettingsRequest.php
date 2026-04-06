<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ResetNotificationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustAnchorId
 * @property list<Shapes\NotificationSettingKey> $notificationSettingKeys
 */
class ResetNotificationSettingsRequest extends Request
{
    /**
     * @param array{
     *     trustAnchorId: string,
     *     notificationSettingKeys: list<Shapes\NotificationSettingKey>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
