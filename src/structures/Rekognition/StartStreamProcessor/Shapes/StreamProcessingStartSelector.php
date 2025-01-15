<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisVideoStreamStartSelector|null $KVSStreamStartSelector
 */
class StreamProcessingStartSelector extends Shape
{
    /**
     * @param array{KVSStreamStartSelector?: KinesisVideoStreamStartSelector|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
