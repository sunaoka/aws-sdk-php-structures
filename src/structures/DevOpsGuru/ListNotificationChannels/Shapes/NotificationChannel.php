<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListNotificationChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property NotificationChannelConfig $Config
 */
class NotificationChannel extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Config?: NotificationChannelConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
