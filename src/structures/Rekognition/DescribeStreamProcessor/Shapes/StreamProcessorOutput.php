<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisDataStream|null $KinesisDataStream
 * @property S3Destination|null $S3Destination
 */
class StreamProcessorOutput extends Shape
{
    /**
     * @param array{
     *     KinesisDataStream?: KinesisDataStream|null,
     *     S3Destination?: S3Destination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
