<?php

namespace Sunaoka\Aws\Structures\AutoScaling\ExitStandby;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property string $AutoScalingGroupName
 */
class ExitStandbyRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     AutoScalingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
