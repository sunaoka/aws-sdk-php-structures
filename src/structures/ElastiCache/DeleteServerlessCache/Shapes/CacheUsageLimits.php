<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteServerlessCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataStorage|null $DataStorage
 * @property ECPUPerSecond|null $ECPUPerSecond
 */
class CacheUsageLimits extends Shape
{
    /**
     * @param array{
     *     DataStorage?: DataStorage|null,
     *     ECPUPerSecond?: ECPUPerSecond|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
