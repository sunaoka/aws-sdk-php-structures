<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property list<SimulationAppPortMapping> $IngressPortMappings
 */
class SimulationAppEndpointInfo extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     IngressPortMappings?: list<SimulationAppPortMapping>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
