<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LifecycleHookName
 * @property string $LifecycleTransition
 * @property string|null $NotificationMetadata
 * @property int|null $HeartbeatTimeout
 * @property string|null $DefaultResult
 * @property string|null $NotificationTargetARN
 * @property string|null $RoleARN
 */
class LifecycleHookSpecification extends Shape
{
    /**
     * @param array{
     *     LifecycleHookName: string,
     *     LifecycleTransition: string,
     *     NotificationMetadata?: string|null,
     *     HeartbeatTimeout?: int|null,
     *     DefaultResult?: string|null,
     *     NotificationTargetARN?: string|null,
     *     RoleARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
