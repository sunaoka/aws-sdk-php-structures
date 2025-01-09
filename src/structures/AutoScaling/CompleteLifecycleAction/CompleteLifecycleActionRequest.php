<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CompleteLifecycleAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LifecycleHookName
 * @property string $AutoScalingGroupName
 * @property string $LifecycleActionToken
 * @property string $LifecycleActionResult
 * @property string $InstanceId
 */
class CompleteLifecycleActionRequest extends Request
{
    /**
     * @param array{
     *     LifecycleHookName: string,
     *     AutoScalingGroupName: string,
     *     LifecycleActionToken?: string,
     *     LifecycleActionResult: string,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
