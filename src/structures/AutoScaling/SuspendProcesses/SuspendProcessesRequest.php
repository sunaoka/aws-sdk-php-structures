<?php

namespace Sunaoka\Aws\Structures\AutoScaling\SuspendProcesses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string> $ScalingProcesses
 */
class SuspendProcessesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     ScalingProcesses?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
