<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Bucket $s3Bucket
 * @property FirehoseStream $firehoseStream
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: S3Bucket,
     *     firehoseStream?: FirehoseStream
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
