<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\AddNotificationChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnsChannelConfig $Sns
 * @property NotificationFilterConfig|null $Filters
 */
class NotificationChannelConfig extends Shape
{
    /**
     * @param array{
     *     Sns: SnsChannelConfig,
     *     Filters?: NotificationFilterConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
