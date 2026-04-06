<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $gpuCount
 * @property int|null $gpuMemorySizeInMiB
 */
class Gpu extends Shape
{
    /**
     * @param array{
     *     gpuCount?: int|null,
     *     gpuMemorySizeInMiB?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
