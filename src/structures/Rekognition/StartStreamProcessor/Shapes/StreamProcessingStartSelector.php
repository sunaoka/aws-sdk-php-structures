<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisVideoStreamStartSelector $KVSStreamStartSelector
 */
class StreamProcessingStartSelector extends Shape
{
    /**
     * @param array{KVSStreamStartSelector?: KinesisVideoStreamStartSelector} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
