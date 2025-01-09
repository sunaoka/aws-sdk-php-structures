<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityReservationId
 * @property string $CapacityReservationResourceGroupArn
 */
class CapacityReservationTarget extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string,
     *     CapacityReservationResourceGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
