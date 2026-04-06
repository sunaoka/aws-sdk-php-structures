<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $desiredCapacity
 * @property int|null $minSize
 * @property int|null $maxSize
 * @property string|null $instanceType
 */
class AutoScalingGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     desiredCapacity?: int|null,
     *     minSize?: int|null,
     *     maxSize?: int|null,
     *     instanceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
