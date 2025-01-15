<?php

namespace Sunaoka\Aws\Structures\AutoScaling\RecordLifecycleActionHeartbeat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LifecycleHookName
 * @property string $AutoScalingGroupName
 * @property string|null $LifecycleActionToken
 * @property string|null $InstanceId
 */
class RecordLifecycleActionHeartbeatRequest extends Request
{
    /**
     * @param array{
     *     LifecycleHookName: string,
     *     AutoScalingGroupName: string,
     *     LifecycleActionToken?: string|null,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
