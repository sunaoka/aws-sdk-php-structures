<?php

namespace Sunaoka\Aws\Structures\AutoScaling\UpdateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OnDemandAllocationStrategy
 * @property int $OnDemandBaseCapacity
 * @property int $OnDemandPercentageAboveBaseCapacity
 * @property string $SpotAllocationStrategy
 * @property int $SpotInstancePools
 * @property string $SpotMaxPrice
 */
class InstancesDistribution extends Shape
{
    /**
     * @param array{
     *     OnDemandAllocationStrategy?: string,
     *     OnDemandBaseCapacity?: int,
     *     OnDemandPercentageAboveBaseCapacity?: int,
     *     SpotAllocationStrategy?: string,
     *     SpotInstancePools?: int,
     *     SpotMaxPrice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
