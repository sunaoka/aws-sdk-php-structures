<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property list<SimulationAppPortMapping>|null $IngressPortMappings
 */
class SimulationAppEndpointInfo extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     IngressPortMappings?: list<SimulationAppPortMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
