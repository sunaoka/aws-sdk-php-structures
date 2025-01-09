<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Connections
 */
class ConnectionsList extends Shape
{
    /**
     * @param array{Connections?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
