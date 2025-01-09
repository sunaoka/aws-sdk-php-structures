<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Destination $S3Destination
 */
class DestinationConfigurations extends Shape
{
    /**
     * @param array{S3Destination: S3Destination} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
