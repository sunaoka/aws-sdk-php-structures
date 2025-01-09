<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogDestination> $Destinations
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{Destinations?: list<LogDestination>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
