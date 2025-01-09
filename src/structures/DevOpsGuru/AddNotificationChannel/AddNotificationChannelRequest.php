<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\AddNotificationChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NotificationChannelConfig $Config
 */
class AddNotificationChannelRequest extends Request
{
    /**
     * @param array{Config: Shapes\NotificationChannelConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
