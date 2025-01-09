<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Gpu> $gpus
 */
class GpuInfo extends Shape
{
    /**
     * @param array{gpus?: list<Gpu>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
