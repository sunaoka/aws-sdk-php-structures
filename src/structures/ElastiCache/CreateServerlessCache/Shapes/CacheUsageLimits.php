<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataStorage $DataStorage
 * @property ECPUPerSecond $ECPUPerSecond
 */
class CacheUsageLimits extends Shape
{
    /**
     * @param array{
     *     DataStorage?: DataStorage,
     *     ECPUPerSecond?: ECPUPerSecond
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
