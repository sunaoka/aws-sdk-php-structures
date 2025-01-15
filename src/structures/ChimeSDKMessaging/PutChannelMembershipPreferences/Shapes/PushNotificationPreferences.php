<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutChannelMembershipPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'NONE'|'FILTERED' $AllowNotifications
 * @property string|null $FilterRule
 */
class PushNotificationPreferences extends Shape
{
    /**
     * @param array{
     *     AllowNotifications: 'ALL'|'NONE'|'FILTERED',
     *     FilterRule?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
