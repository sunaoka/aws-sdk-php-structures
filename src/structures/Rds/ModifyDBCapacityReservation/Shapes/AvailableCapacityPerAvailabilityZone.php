<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property int|null $AvailableCapacity
 */
class AvailableCapacityPerAvailabilityZone extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailableCapacity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
