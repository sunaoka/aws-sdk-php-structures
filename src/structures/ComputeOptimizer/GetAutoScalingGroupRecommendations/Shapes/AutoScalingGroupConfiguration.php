<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $desiredCapacity
 * @property int $minSize
 * @property int $maxSize
 * @property string $instanceType
 */
class AutoScalingGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     desiredCapacity?: int,
     *     minSize?: int,
     *     maxSize?: int,
     *     instanceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
