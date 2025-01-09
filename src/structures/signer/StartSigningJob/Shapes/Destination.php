<?php

namespace Sunaoka\Aws\Structures\signer\StartSigningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Destination $s3
 */
class Destination extends Shape
{
    /**
     * @param array{s3?: S3Destination} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
