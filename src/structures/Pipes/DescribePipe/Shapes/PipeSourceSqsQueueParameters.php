<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $BatchSize
 * @property int<0, 300> $MaximumBatchingWindowInSeconds
 */
class PipeSourceSqsQueueParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
