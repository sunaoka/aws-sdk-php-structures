<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $TimeoutDurationMinutes
 * @property 'SWITCH_TO_ON_DEMAND'|'TERMINATE_CLUSTER' $TimeoutAction
 * @property int<0, max> $BlockDurationMinutes
 * @property 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized' $AllocationStrategy
 */
class SpotProvisioningSpecification extends Shape
{
    /**
     * @param array{
     *     TimeoutDurationMinutes: int<0, max>,
     *     TimeoutAction: 'SWITCH_TO_ON_DEMAND'|'TERMINATE_CLUSTER',
     *     BlockDurationMinutes?: int<0, max>,
     *     AllocationStrategy?: 'capacity-optimized'|'price-capacity-optimized'|'lowest-price'|'diversified'|'capacity-optimized-prioritized'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
