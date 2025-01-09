<?php

namespace Sunaoka\Aws\Structures\AutoScaling\EnterStandby;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property string $AutoScalingGroupName
 * @property bool $ShouldDecrementDesiredCapacity
 */
class EnterStandbyRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>,
     *     AutoScalingGroupName: string,
     *     ShouldDecrementDesiredCapacity: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
