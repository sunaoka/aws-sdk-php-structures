<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationBillingRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property string $AvailabilityZone
 * @property 'default'|'dedicated' $Tenancy
 */
class CapacityReservationInfo extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string,
     *     AvailabilityZone?: string,
     *     Tenancy?: 'default'|'dedicated'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
