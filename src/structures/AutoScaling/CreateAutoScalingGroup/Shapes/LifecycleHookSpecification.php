<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LifecycleHookName
 * @property string $LifecycleTransition
 * @property string $NotificationMetadata
 * @property int $HeartbeatTimeout
 * @property string $DefaultResult
 * @property string $NotificationTargetARN
 * @property string $RoleARN
 */
class LifecycleHookSpecification extends Shape
{
    /**
     * @param array{
     *     LifecycleHookName: string,
     *     LifecycleTransition: string,
     *     NotificationMetadata?: string,
     *     HeartbeatTimeout?: int,
     *     DefaultResult?: string,
     *     NotificationTargetARN?: string,
     *     RoleARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
