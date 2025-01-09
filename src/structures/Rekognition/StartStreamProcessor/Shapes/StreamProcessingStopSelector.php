<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxDurationInSeconds
 */
class StreamProcessingStopSelector extends Shape
{
    /**
     * @param array{MaxDurationInSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
