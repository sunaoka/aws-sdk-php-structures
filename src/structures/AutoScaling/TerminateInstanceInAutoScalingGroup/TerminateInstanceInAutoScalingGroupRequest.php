<?php

namespace Sunaoka\Aws\Structures\AutoScaling\TerminateInstanceInAutoScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property bool $ShouldDecrementDesiredCapacity
 */
class TerminateInstanceInAutoScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ShouldDecrementDesiredCapacity: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
