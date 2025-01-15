<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationId
 * @property string|null $CapacityReservationResourceGroupArn
 */
class CapacityReservationTargetResponse extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string|null,
     *     CapacityReservationResourceGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
