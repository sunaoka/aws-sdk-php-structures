<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimestreamDestination $TimestreamDestination
 */
class TargetDestination extends Shape
{
    /**
     * @param array{TimestreamDestination?: TimestreamDestination} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
