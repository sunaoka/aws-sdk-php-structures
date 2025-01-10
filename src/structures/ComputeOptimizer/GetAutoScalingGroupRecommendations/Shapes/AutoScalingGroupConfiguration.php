<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $desiredCapacity
 * @property int $minSize
 * @property int $maxSize
 * @property string $instanceType
 * @property 'Prioritized'|'LowestPrice' $allocationStrategy
 * @property double $estimatedInstanceHourReductionPercentage
 * @property 'SingleInstanceType'|'MixedInstanceTypes' $type
 * @property list<string> $mixedInstanceTypes
 */
class AutoScalingGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     desiredCapacity?: int,
     *     minSize?: int,
     *     maxSize?: int,
     *     instanceType?: string,
     *     allocationStrategy?: 'Prioritized'|'LowestPrice',
     *     estimatedInstanceHourReductionPercentage?: double,
     *     type?: 'SingleInstanceType'|'MixedInstanceTypes',
     *     mixedInstanceTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
