<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price'|'prioritized' $AllocationStrategy
 * @property OnDemandCapacityReservationOptions|null $CapacityReservationOptions
 */
class OnDemandProvisioningSpecification extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy: 'lowest-price'|'prioritized',
     *     CapacityReservationOptions?: OnDemandCapacityReservationOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
