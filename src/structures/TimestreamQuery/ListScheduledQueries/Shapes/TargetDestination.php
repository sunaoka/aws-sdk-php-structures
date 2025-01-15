<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimestreamDestination|null $TimestreamDestination
 */
class TargetDestination extends Shape
{
    /**
     * @param array{TimestreamDestination?: TimestreamDestination|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
