<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $memory
 * @property int|null $memoryReservation
 */
class MemorySizeConfiguration extends Shape
{
    /**
     * @param array{
     *     memory?: int|null,
     *     memoryReservation?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
