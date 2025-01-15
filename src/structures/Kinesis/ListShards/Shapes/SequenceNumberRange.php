<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListShards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartingSequenceNumber
 * @property string|null $EndingSequenceNumber
 */
class SequenceNumberRange extends Shape
{
    /**
     * @param array{
     *     StartingSequenceNumber: string,
     *     EndingSequenceNumber?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
