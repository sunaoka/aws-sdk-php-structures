<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationTopology\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationId
 * @property string|null $CapacityBlockId
 * @property string|null $State
 * @property string|null $InstanceType
 * @property string|null $GroupName
 * @property list<string>|null $NetworkNodes
 * @property string|null $AvailabilityZoneId
 * @property string|null $AvailabilityZone
 */
class CapacityReservationTopology extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string|null,
     *     CapacityBlockId?: string|null,
     *     State?: string|null,
     *     InstanceType?: string|null,
     *     GroupName?: string|null,
     *     NetworkNodes?: list<string>|null,
     *     AvailabilityZoneId?: string|null,
     *     AvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
