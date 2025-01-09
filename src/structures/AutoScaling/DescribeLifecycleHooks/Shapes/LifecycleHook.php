<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLifecycleHooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LifecycleHookName
 * @property string $AutoScalingGroupName
 * @property string $LifecycleTransition
 * @property string $NotificationTargetARN
 * @property string $RoleARN
 * @property string $NotificationMetadata
 * @property int $HeartbeatTimeout
 * @property int $GlobalTimeout
 * @property string $DefaultResult
 */
class LifecycleHook extends Shape
{
    /**
     * @param array{
     *     LifecycleHookName?: string,
     *     AutoScalingGroupName?: string,
     *     LifecycleTransition?: string,
     *     NotificationTargetARN?: string,
     *     RoleARN?: string,
     *     NotificationMetadata?: string,
     *     HeartbeatTimeout?: int,
     *     GlobalTimeout?: int,
     *     DefaultResult?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
