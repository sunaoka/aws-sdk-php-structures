<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TimeoutDurationMinutes
 * @property 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized' $AllocationStrategy
 */
class SpotResizingSpecification extends Shape
{
    /**
     * @param array{
     *     TimeoutDurationMinutes?: int,
     *     AllocationStrategy?: 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
