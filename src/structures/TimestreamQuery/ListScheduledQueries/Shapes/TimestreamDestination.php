<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseName
 * @property string|null $TableName
 */
class TimestreamDestination extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string|null,
     *     TableName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
