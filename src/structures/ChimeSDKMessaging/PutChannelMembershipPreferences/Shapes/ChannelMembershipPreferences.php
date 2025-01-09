<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutChannelMembershipPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PushNotificationPreferences $PushNotifications
 */
class ChannelMembershipPreferences extends Shape
{
    /**
     * @param array{PushNotifications?: PushNotificationPreferences} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
