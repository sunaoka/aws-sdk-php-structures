<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TimeoutDurationMinutes
 * @property 'SWITCH_TO_ON_DEMAND'|'TERMINATE_CLUSTER' $TimeoutAction
 * @property int $BlockDurationMinutes
 * @property 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized' $AllocationStrategy
 */
class SpotProvisioningSpecification extends Shape
{
    /**
     * @param array{
     *     TimeoutDurationMinutes: int,
     *     TimeoutAction: 'SWITCH_TO_ON_DEMAND'|'TERMINATE_CLUSTER',
     *     BlockDurationMinutes?: int,
     *     AllocationStrategy?: 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
