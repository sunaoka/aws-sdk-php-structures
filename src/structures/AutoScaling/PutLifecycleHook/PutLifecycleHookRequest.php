<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutLifecycleHook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LifecycleHookName
 * @property string $AutoScalingGroupName
 * @property string|null $LifecycleTransition
 * @property string|null $RoleARN
 * @property string|null $NotificationTargetARN
 * @property string|null $NotificationMetadata
 * @property int|null $HeartbeatTimeout
 * @property string|null $DefaultResult
 */
class PutLifecycleHookRequest extends Request
{
    /**
     * @param array{
     *     LifecycleHookName: string,
     *     AutoScalingGroupName: string,
     *     LifecycleTransition?: string|null,
     *     RoleARN?: string|null,
     *     NotificationTargetARN?: string|null,
     *     NotificationMetadata?: string|null,
     *     HeartbeatTimeout?: int|null,
     *     DefaultResult?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
