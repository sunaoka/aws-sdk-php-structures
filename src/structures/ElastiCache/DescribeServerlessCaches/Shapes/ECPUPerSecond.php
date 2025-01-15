<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Maximum
 * @property int|null $Minimum
 */
class ECPUPerSecond extends Shape
{
    /**
     * @param array{
     *     Maximum?: int|null,
     *     Minimum?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
