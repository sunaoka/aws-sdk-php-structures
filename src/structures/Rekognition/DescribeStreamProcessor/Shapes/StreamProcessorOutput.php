<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisDataStream $KinesisDataStream
 * @property S3Destination $S3Destination
 */
class StreamProcessorOutput extends Shape
{
    /**
     * @param array{
     *     KinesisDataStream?: KinesisDataStream,
     *     S3Destination?: S3Destination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
