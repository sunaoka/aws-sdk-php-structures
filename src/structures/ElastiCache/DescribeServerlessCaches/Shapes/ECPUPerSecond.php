<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Maximum
 * @property int $Minimum
 */
class ECPUPerSecond extends Shape
{
    /**
     * @param array{
     *     Maximum?: int,
     *     Minimum?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
