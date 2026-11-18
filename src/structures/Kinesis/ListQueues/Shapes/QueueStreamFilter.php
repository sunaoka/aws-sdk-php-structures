<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamARN
 * @property \Aws\Api\DateTimeResult|null $StreamCreationTimestamp
 */
class QueueStreamFilter extends Shape
{
    /**
     * @param array{
     *     StreamARN: string,
     *     StreamCreationTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
