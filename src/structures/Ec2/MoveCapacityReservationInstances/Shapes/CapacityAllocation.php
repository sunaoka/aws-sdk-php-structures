<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveCapacityReservationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'used'|'future'|null $AllocationType
 * @property int|null $Count
 */
class CapacityAllocation extends Shape
{
    /**
     * @param array{
     *     AllocationType?: 'used'|'future'|null,
     *     Count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
