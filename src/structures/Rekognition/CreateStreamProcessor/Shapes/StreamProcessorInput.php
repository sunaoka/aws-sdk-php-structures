<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisVideoStream|null $KinesisVideoStream
 */
class StreamProcessorInput extends Shape
{
    /**
     * @param array{KinesisVideoStream?: KinesisVideoStream|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
