<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $GroupName
 */
class ScheduledInstancesPlacement extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     GroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
