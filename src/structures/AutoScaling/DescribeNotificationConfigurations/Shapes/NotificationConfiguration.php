<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeNotificationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutoScalingGroupName
 * @property string $TopicARN
 * @property string $NotificationType
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string,
     *     TopicARN?: string,
     *     NotificationType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
