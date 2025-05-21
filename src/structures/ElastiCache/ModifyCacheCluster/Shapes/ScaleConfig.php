<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ScalePercentage
 * @property int|null $ScaleIntervalMinutes
 */
class ScaleConfig extends Shape
{
    /**
     * @param array{
     *     ScalePercentage?: int|null,
     *     ScaleIntervalMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
