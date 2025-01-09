<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BatchSize
 * @property int $MaximumBatchingWindowInSeconds
 */
class UpdatePipeSourceSqsQueueParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int,
     *     MaximumBatchingWindowInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
