<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $desiredCapacity
 * @property int|null $minSize
 * @property int|null $maxSize
 * @property string|null $instanceType
 * @property 'Prioritized'|'LowestPrice'|null $allocationStrategy
 * @property double|null $estimatedInstanceHourReductionPercentage
 * @property 'SingleInstanceType'|'MixedInstanceTypes'|null $type
 * @property list<string>|null $mixedInstanceTypes
 */
class AutoScalingGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     desiredCapacity?: int|null,
     *     minSize?: int|null,
     *     maxSize?: int|null,
     *     instanceType?: string|null,
     *     allocationStrategy?: 'Prioritized'|'LowestPrice'|null,
     *     estimatedInstanceHourReductionPercentage?: double|null,
     *     type?: 'SingleInstanceType'|'MixedInstanceTypes'|null,
     *     mixedInstanceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
