<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerName
 * @property MemorySizeConfiguration $memorySizeConfiguration
 * @property int $cpu
 */
class ContainerRecommendation extends Shape
{
    /**
     * @param array{
     *     containerName?: string,
     *     memorySizeConfiguration?: MemorySizeConfiguration,
     *     cpu?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
