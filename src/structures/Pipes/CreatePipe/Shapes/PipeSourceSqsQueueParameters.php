<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $BatchSize
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 */
class PipeSourceSqsQueueParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
