<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Maximum
 * @property int $Minimum
 * @property 'GB' $Unit
 */
class DataStorage extends Shape
{
    /**
     * @param array{
     *     Maximum?: int,
     *     Minimum?: int,
     *     Unit: 'GB'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
