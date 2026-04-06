<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price' $AllocationStrategy
 * @property OnDemandCapacityReservationOptions|null $CapacityReservationOptions
 */
class OnDemandProvisioningSpecification extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy: 'lowest-price',
     *     CapacityReservationOptions?: OnDemandCapacityReservationOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
