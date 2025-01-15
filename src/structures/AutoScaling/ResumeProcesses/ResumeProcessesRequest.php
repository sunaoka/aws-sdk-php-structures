<?php

namespace Sunaoka\Aws\Structures\AutoScaling\ResumeProcesses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string>|null $ScalingProcesses
 */
class ResumeProcessesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     ScalingProcesses?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
