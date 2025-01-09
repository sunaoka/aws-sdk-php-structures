<?php

namespace Sunaoka\Aws\Structures\AutoScaling\ExitStandby;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property string $AutoScalingGroupName
 */
class ExitStandbyRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>,
     *     AutoScalingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
