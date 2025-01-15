<?php

namespace Sunaoka\Aws\Structures\AutoScaling\AttachInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property string $AutoScalingGroupName
 */
class AttachInstancesRequest extends Request
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
