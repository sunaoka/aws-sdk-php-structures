<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationId
 * @property int|null $TotalCapacity
 * @property int|null $TotalAvailableCapacity
 * @property int|null $TotalUnavailableCapacity
 */
class CapacityReservationStatus extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string|null,
     *     TotalCapacity?: int|null,
     *     TotalAvailableCapacity?: int|null,
     *     TotalUnavailableCapacity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
