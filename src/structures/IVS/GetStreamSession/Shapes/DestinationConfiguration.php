<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DestinationConfiguration $s3
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{s3?: S3DestinationConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
