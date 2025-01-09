<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisVideoStream $KinesisVideoStream
 */
class StreamProcessorInput extends Shape
{
    /**
     * @param array{KinesisVideoStream?: KinesisVideoStream} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
