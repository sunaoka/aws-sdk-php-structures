<?php

namespace Sunaoka\Aws\Structures\Iot\CreateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 255>|null $fileId
 * @property S3Location|null $s3Location
 */
class StreamFile extends Shape
{
    /**
     * @param array{
     *     fileId?: int<0, 255>|null,
     *     s3Location?: S3Location|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
