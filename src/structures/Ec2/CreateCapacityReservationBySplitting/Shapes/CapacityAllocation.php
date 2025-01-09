<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationBySplitting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'used' $AllocationType
 * @property int $Count
 */
class CapacityAllocation extends Shape
{
    /**
     * @param array{
     *     AllocationType?: 'used',
     *     Count?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
