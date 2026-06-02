<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationCancellationQuotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstanceCount
 * @property string|null $ReservationState
 */
class CapacityReservationConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int|null,
     *     ReservationState?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
