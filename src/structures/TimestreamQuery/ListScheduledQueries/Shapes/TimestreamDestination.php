<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $TableName
 */
class TimestreamDestination extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string,
     *     TableName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
