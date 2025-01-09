<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $TimeoutDurationMinutes
 * @property 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized' $AllocationStrategy
 */
class SpotResizingSpecification extends Shape
{
    /**
     * @param array{
     *     TimeoutDurationMinutes?: int<0, max>,
     *     AllocationStrategy?: 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
