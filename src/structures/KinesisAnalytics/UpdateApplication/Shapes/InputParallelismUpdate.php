<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 64> $CountUpdate
 */
class InputParallelismUpdate extends Shape
{
    /**
     * @param array{CountUpdate?: int<1, 64>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
