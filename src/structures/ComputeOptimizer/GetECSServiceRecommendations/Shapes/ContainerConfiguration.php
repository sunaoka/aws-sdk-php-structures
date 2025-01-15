<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerName
 * @property MemorySizeConfiguration|null $memorySizeConfiguration
 * @property int|null $cpu
 */
class ContainerConfiguration extends Shape
{
    /**
     * @param array{
     *     containerName?: string|null,
     *     memorySizeConfiguration?: MemorySizeConfiguration|null,
     *     cpu?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
