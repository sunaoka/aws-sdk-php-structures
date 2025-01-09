<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 120> $MaxDurationInSeconds
 */
class StreamProcessingStopSelector extends Shape
{
    /**
     * @param array{MaxDurationInSeconds?: int<1, 120>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
