<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutLifecycleHook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LifecycleHookName
 * @property string $AutoScalingGroupName
 * @property string $LifecycleTransition
 * @property string $RoleARN
 * @property string $NotificationTargetARN
 * @property string $NotificationMetadata
 * @property int $HeartbeatTimeout
 * @property string $DefaultResult
 */
class PutLifecycleHookRequest extends Request
{
    /**
     * @param array{
     *     LifecycleHookName: string,
     *     AutoScalingGroupName: string,
     *     LifecycleTransition?: string,
     *     RoleARN?: string,
     *     NotificationTargetARN?: string,
     *     NotificationMetadata?: string,
     *     HeartbeatTimeout?: int,
     *     DefaultResult?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
