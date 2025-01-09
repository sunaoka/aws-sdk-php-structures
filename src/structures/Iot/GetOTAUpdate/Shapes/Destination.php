<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Destination $s3Destination
 */
class Destination extends Shape
{
    /**
     * @param array{s3Destination?: S3Destination} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
