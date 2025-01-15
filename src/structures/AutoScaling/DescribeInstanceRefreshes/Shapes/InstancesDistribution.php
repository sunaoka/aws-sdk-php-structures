<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OnDemandAllocationStrategy
 * @property int|null $OnDemandBaseCapacity
 * @property int|null $OnDemandPercentageAboveBaseCapacity
 * @property string|null $SpotAllocationStrategy
 * @property int|null $SpotInstancePools
 * @property string|null $SpotMaxPrice
 */
class InstancesDistribution extends Shape
{
    /**
     * @param array{
     *     OnDemandAllocationStrategy?: string|null,
     *     OnDemandBaseCapacity?: int|null,
     *     OnDemandPercentageAboveBaseCapacity?: int|null,
     *     SpotAllocationStrategy?: string|null,
     *     SpotInstancePools?: int|null,
     *     SpotMaxPrice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
