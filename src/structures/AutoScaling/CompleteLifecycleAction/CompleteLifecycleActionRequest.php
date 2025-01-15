<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CompleteLifecycleAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LifecycleHookName
 * @property string $AutoScalingGroupName
 * @property string|null $LifecycleActionToken
 * @property string $LifecycleActionResult
 * @property string|null $InstanceId
 */
class CompleteLifecycleActionRequest extends Request
{
    /**
     * @param array{
     *     LifecycleHookName: string,
     *     AutoScalingGroupName: string,
     *     LifecycleActionToken?: string|null,
     *     LifecycleActionResult: string,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
