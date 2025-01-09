<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 64> $Count
 */
class InputParallelism extends Shape
{
    /**
     * @param array{Count?: int<1, 64>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
