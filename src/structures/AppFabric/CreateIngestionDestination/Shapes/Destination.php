<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Bucket|null $s3Bucket
 * @property FirehoseStream|null $firehoseStream
 */
class Destination extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: S3Bucket|null,
     *     firehoseStream?: FirehoseStream|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
