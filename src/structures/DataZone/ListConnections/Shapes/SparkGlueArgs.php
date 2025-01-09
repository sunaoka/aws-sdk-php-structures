<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connection
 */
class SparkGlueArgs extends Shape
{
    /**
     * @param array{connection?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
