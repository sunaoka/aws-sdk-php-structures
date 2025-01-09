<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Stream $stream
 * @property S3Location $s3Location
 */
class FileLocation extends Shape
{
    /**
     * @param array{
     *     stream?: Stream,
     *     s3Location?: S3Location
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
