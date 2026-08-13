<?php

namespace Sunaoka\Aws\Structures\AutoScaling\TerminateInstanceInAutoScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceId
 * @property list<string>|null $InstanceIds
 * @property string|null $AutoScalingGroupName
 * @property bool $ShouldDecrementDesiredCapacity
 */
class TerminateInstanceInAutoScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     InstanceIds?: list<string>|null,
     *     AutoScalingGroupName?: string|null,
     *     ShouldDecrementDesiredCapacity: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
