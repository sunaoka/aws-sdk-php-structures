<?php

namespace Sunaoka\Aws\Structures\Iot\CreateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 255> $fileId
 * @property S3Location $s3Location
 */
class StreamFile extends Shape
{
    /**
     * @param array{
     *     fileId?: int<0, 255>,
     *     s3Location?: S3Location
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
