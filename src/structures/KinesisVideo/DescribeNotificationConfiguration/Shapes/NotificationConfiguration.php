<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property NotificationDestinationConfig $DestinationConfig
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     Status: 'ENABLED'|'DISABLED',
     *     DestinationConfig: NotificationDestinationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
