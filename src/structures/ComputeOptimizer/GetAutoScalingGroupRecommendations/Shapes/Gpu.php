<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $gpuCount
 * @property int $gpuMemorySizeInMiB
 */
class Gpu extends Shape
{
    /**
     * @param array{
     *     gpuCount?: int,
     *     gpuMemorySizeInMiB?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
