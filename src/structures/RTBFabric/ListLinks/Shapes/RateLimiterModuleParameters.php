<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $tps
 */
class RateLimiterModuleParameters extends Shape
{
    /**
     * @param array{tps?: float|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
