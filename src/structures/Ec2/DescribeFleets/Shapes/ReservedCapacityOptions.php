<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'prioritized'|null $AllocationStrategy
 * @property list<'on-demand-capacity-reservation'|'capacity-block'|'interruptible-capacity-reservation'>|null $ReservationTypes
 * @property ReservedCapacityFallbackOptions|null $ReservedCapacityFallbackOptions
 */
class ReservedCapacityOptions extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'prioritized'|null,
     *     ReservationTypes?: list<'on-demand-capacity-reservation'|'capacity-block'|'interruptible-capacity-reservation'>|null,
     *     ReservedCapacityFallbackOptions?: ReservedCapacityFallbackOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
