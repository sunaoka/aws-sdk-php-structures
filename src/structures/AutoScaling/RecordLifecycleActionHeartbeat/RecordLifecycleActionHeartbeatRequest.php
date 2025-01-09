<?php

namespace Sunaoka\Aws\Structures\AutoScaling\RecordLifecycleActionHeartbeat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LifecycleHookName
 * @property string $AutoScalingGroupName
 * @property string $LifecycleActionToken
 * @property string $InstanceId
 */
class RecordLifecycleActionHeartbeatRequest extends Request
{
    /**
     * @param array{
     *     LifecycleHookName: string,
     *     AutoScalingGroupName: string,
     *     LifecycleActionToken?: string,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
