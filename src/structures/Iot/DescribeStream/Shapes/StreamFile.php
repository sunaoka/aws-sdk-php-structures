<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $fileId
 * @property S3Location $s3Location
 */
class StreamFile extends Shape
{
    /**
     * @param array{
     *     fileId?: int,
     *     s3Location?: S3Location
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
