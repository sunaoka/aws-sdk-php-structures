<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetChannelMembershipPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'NONE'|'FILTERED' $AllowNotifications
 * @property string $FilterRule
 */
class PushNotificationPreferences extends Shape
{
    /**
     * @param array{
     *     AllowNotifications: 'ALL'|'NONE'|'FILTERED',
     *     FilterRule?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
