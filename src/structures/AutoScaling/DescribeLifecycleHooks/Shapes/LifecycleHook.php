<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLifecycleHooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LifecycleHookName
 * @property string|null $AutoScalingGroupName
 * @property string|null $LifecycleTransition
 * @property string|null $NotificationTargetARN
 * @property string|null $RoleARN
 * @property string|null $NotificationMetadata
 * @property int|null $HeartbeatTimeout
 * @property int|null $GlobalTimeout
 * @property string|null $DefaultResult
 */
class LifecycleHook extends Shape
{
    /**
     * @param array{
     *     LifecycleHookName?: string|null,
     *     AutoScalingGroupName?: string|null,
     *     LifecycleTransition?: string|null,
     *     NotificationTargetARN?: string|null,
     *     RoleARN?: string|null,
     *     NotificationMetadata?: string|null,
     *     HeartbeatTimeout?: int|null,
     *     GlobalTimeout?: int|null,
     *     DefaultResult?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
