<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Gpu>|null $gpus
 */
class GpuInfo extends Shape
{
    /**
     * @param array{gpus?: list<Gpu>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
