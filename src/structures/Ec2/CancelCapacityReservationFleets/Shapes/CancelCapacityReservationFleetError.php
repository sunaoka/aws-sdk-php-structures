<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservationFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Message
 */
class CancelCapacityReservationFleetError extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
