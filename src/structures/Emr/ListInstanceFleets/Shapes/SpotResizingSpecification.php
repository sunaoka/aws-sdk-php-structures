<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $TimeoutDurationMinutes
 * @property 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized'|null $AllocationStrategy
 */
class SpotResizingSpecification extends Shape
{
    /**
     * @param array{
     *     TimeoutDurationMinutes?: int<0, max>|null,
     *     AllocationStrategy?: 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
