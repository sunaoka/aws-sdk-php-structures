<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DetachInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property string $AutoScalingGroupName
 * @property bool $ShouldDecrementDesiredCapacity
 */
class DetachInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     AutoScalingGroupName: string,
     *     ShouldDecrementDesiredCapacity: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
