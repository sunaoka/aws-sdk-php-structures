<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ConfigMap $s3Destination
 */
class Destination extends Shape
{
    /**
     * @param array{s3Destination: S3ConfigMap} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
