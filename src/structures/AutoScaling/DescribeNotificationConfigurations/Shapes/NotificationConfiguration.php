<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeNotificationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutoScalingGroupName
 * @property string|null $TopicARN
 * @property string|null $NotificationType
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string|null,
     *     TopicARN?: string|null,
     *     NotificationType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
