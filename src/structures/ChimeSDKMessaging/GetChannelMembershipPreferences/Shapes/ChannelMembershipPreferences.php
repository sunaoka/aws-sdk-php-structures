<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetChannelMembershipPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PushNotificationPreferences|null $PushNotifications
 */
class ChannelMembershipPreferences extends Shape
{
    /**
     * @param array{PushNotifications?: PushNotificationPreferences|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
