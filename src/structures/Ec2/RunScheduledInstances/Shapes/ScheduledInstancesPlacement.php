<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $GroupName
 */
class ScheduledInstancesPlacement extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     GroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
