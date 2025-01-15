<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 64>|null $Count
 */
class InputParallelism extends Shape
{
    /**
     * @param array{Count?: int<1, 64>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
