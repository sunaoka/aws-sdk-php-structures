<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PortMapping> $portMappings
 */
class PortForwardingConfig extends Shape
{
    /**
     * @param array{portMappings?: list<PortMapping>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
