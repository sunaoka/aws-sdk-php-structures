<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListNotificationChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property NotificationChannelConfig|null $Config
 */
class NotificationChannel extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Config?: NotificationChannelConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
