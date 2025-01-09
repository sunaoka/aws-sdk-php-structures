<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartingSequenceNumber
 * @property string $EndingSequenceNumber
 */
class SequenceNumberRange extends Shape
{
    /**
     * @param array{
     *     StartingSequenceNumber: string,
     *     EndingSequenceNumber?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
