<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLifecycleHooks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string>|null $LifecycleHookNames
 */
class DescribeLifecycleHooksRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     LifecycleHookNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
