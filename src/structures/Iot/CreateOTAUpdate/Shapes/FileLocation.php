<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Stream|null $stream
 * @property S3Location|null $s3Location
 */
class FileLocation extends Shape
{
    /**
     * @param array{
     *     stream?: Stream|null,
     *     s3Location?: S3Location|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
