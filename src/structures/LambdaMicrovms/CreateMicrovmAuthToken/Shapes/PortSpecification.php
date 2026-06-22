<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmAuthToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $port
 * @property PortRange|null $range
 * @property Unit|null $allPorts
 */
class PortSpecification extends Shape
{
    /**
     * @param array{
     *     port?: int<1, 65535>|null,
     *     range?: PortRange|null,
     *     allPorts?: Unit|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
