<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $startingSequenceNumber
 * @property string|null $endingSequenceNumber
 */
class SequenceNumberRange extends Shape
{
    /**
     * @param array{
     *     startingSequenceNumber?: string|null,
     *     endingSequenceNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
