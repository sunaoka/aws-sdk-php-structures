<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CapacityReservationIds
 * @property list<string>|null $CapacityReservationResourceGroupArns
 */
class FleetCapacityReservationTargetRequest extends Shape
{
    /**
     * @param array{
     *     CapacityReservationIds?: list<string>|null,
     *     CapacityReservationResourceGroupArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
