<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartingSequenceNumber
 * @property string|null $EndingSequenceNumber
 */
class SequenceNumberRange extends Shape
{
    /**
     * @param array{
     *     StartingSequenceNumber?: string|null,
     *     EndingSequenceNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
