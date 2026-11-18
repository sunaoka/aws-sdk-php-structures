<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP' $Type
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class QueueStartingPosition extends Shape
{
    /**
     * @param array{
     *     Type: 'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP',
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
