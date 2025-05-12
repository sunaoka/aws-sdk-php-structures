<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationBillingRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 * @property string|null $AvailabilityZone
 * @property 'default'|'dedicated'|null $Tenancy
 * @property string|null $AvailabilityZoneId
 */
class CapacityReservationInfo extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string|null,
     *     AvailabilityZone?: string|null,
     *     Tenancy?: 'default'|'dedicated'|null,
     *     AvailabilityZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
