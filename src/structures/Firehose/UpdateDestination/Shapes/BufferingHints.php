<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SizeInMBs
 * @property int $IntervalInSeconds
 */
class BufferingHints extends Shape
{
    /**
     * @param array{
     *     SizeInMBs?: int,
     *     IntervalInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
