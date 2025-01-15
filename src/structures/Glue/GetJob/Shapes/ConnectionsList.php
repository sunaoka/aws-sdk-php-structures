<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Connections
 */
class ConnectionsList extends Shape
{
    /**
     * @param array{Connections?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
