<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PortMapping>|null $portMappings
 */
class PortForwardingConfig extends Shape
{
    /**
     * @param array{portMappings?: list<PortMapping>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
